<?php

namespace Drupal\Tests\poll\FunctionalJavascript;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\FunctionalJavascriptTests\WebDriverTestBase;
use Drupal\poll\PollInterface;
use Symfony\Component\CssSelector\CssSelectorConverter;

/**
 * Tests voting on a poll using Javascript.
 *
 * @group poll
 */
class PollVoteJavascriptTest extends WebDriverTestBase {

  use StringTranslationTrait;

  /**
   * Admin user.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * Web user.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $webUser;

  /**
   * The poll object.
   *
   * @var \Drupal\poll\PollInterface
   */
  protected $poll;

  /**
   * List of permissions used by admin_user.
   *
   * @var array
   */
  protected $adminPermissions = [];

  /**
   * List of permissions used by web_user.
   *
   * @var array
   */
  protected $webUserPermissions = [];

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = ['poll'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->adminUser = $this->drupalCreateUser(array_merge([
      'administer polls',
      'access polls',
    ], $this->adminPermissions));
    $this->webUser = $this->drupalCreateUser(array_merge([
      'access polls',
      'cancel own vote',
    ], $this->webUserPermissions));
    $this->poll = $this->pollCreate();
  }

  /**
   * Creates a poll.
   *
   * @param int $choice_count
   *   (optional) The number of choices to generate. Defaults to 7.
   *
   * @return mixed
   *   The node id of the created poll, or FALSE on error.
   */
  protected function pollCreate($choice_count = 5) {

    $this->drupalLogin($this->adminUser);

    // Get the form first to initialize the state of the internal browser.
    $this->drupalGet('poll/add');

    $question = $this->randomMachineName();
    $choices = $this->generateChoices($choice_count);
    [$edit, $index] = $this->pollGenerateEdit($question, $choices);

    $session = $this->getSession();

    // Re-submit the form until all choices are filled in.
    if (count($choices) > 0) {
      for ($delta = 0; $delta <= count($choices); $delta++) {
        $this->submitForm($edit, 'Add another item');
        [$edit, $index] = $this->pollGenerateEdit($question, $choices, $index);
        $session->wait(1000, 'jQuery("[id^=edit-choice-' . $delta . '-choice]").length > 0');
      }
    }

    $this->submitForm($edit, 'Save');

    // Load the poll.
    $polls = \Drupal::entityTypeManager()
      ->getStorage('poll')
      ->loadByProperties(['question' => $question]);
    $page = $session->getPage();
    $this->assertTrue($page->hasContent(new FormattableMarkup('The poll @question has been added.', ['@question' => $question])), 'Poll has been created.');
    $this->assertFalse(empty($polls), 'Poll has been found in the database.');

    /** @var \Drupal\poll\PollInterface $poll */
    $poll = reset($polls);
    return $poll instanceof PollInterface ? $poll : FALSE;
  }

  /**
   * Generates POST values for the poll node form, specifically poll choices.
   *
   * @param string $question
   *   The poll question.
   * @param array $choices
   *   An array containing poll choices, as generated by
   *   PollTestBase::generateChoices().
   * @param int $index
   *   (optional) The amount/number of already submitted poll choices. Defaults
   *   to 0.
   *
   * @return array
   *   An indexed array containing:
   *   - The generated POST values, suitable for
   *     \Drupal\Tests\UiHelperTrait::submitForm().
   *   - The number of poll choices contained in 'edit', for potential re-usage
   *     in subsequent invocations of this function.
   */
  private function pollGenerateEdit($question, array $choices, $index = 0) {
    $max_new_choices = 1;
    $already_submitted_choices = array_slice($choices, 0, $index);
    $new_choices = array_values(array_slice($choices, $index, $max_new_choices));
    $edit = [
      'question[0][value]' => $question,
    ];
    foreach ($already_submitted_choices as $k => $text) {
      $edit['choice[' . $k . '][choice]'] = $text;
    }
    foreach ($new_choices as $k => $text) {
      $edit['choice[' . $k . '][choice]'] = $text;
    }
    return [$edit, count($already_submitted_choices) + count($new_choices)];
  }

  /**
   * Generates random choices for the poll.
   *
   * @param int $count
   *   (optional) The number of choices to generate. Defaults to 7.
   *
   * @return array
   *   An array of generated choices.
   */
  private function generateChoices($count = 7) {
    $choices = [];
    for ($i = 1; $i <= $count; $i++) {
      $choices[] = $this->randomMachineName();
    }
    return $choices;
  }

  /**
   * Tests voting on a poll using AJAX.
   */
  public function testAjaxPollVote() {

    $this->drupalLogin($this->webUser);

    // Empty vote on a poll.
    $this->drupalGet('poll/' . $this->poll->id());
    $this->submitForm([], 'Vote', 'poll-view-form-1');
    $session = $this->getSession();
    $session->wait(1000, 'jQuery(".messages--error").length > 0');
    $page = $session->getPage();
    $this->assertTrue($page->hasContent('Make a selection before voting.'), 'Vote can not be empty.');
    $this->assertTrue($page->hasButton('Vote'), "'Vote' button appears.");
    $converter = new CssSelectorConverter();
    $xpath = $converter->toXPath('.poll-view-form-' . $this->poll->id());
    $this->assertTrue($session->getDriver()->isVisible($xpath), 'The vote form is visible.');

    // Record a vote for the first choice.
    $edit = [
      'choice' => '1',
    ];
    $this->drupalGet('poll/' . $this->poll->id());
    $this->submitForm($edit, 'Vote', 'poll-view-form-1');
    $session->wait(1000, 'jQuery(".messages--status").length > 0');
    $page = $session->getPage();
    $this->assertTrue($page->hasContent('Your vote has been recorded.'), 'Your vote was recorded.');
    $this->assertTrue($page->hasContent('Total votes: 1'), 'Vote count updated correctly.');
    $this->assertCount(1, $this->cssSelect('.choice-title.is-current-selection'));
    $this->assertCount(4, $this->cssSelect('.choice-title.not-current-selection'));
    $this->assertTrue($page->hasButton('Cancel vote'), "'Cancel your vote' button appears.");
    // Reload the page so that the messages are reset.
    $this->drupalGet('poll/' . $this->poll->id());
    $page->pressButton('Cancel vote');
    $session->wait(1000, 'jQuery(".messages--status").length > 0');
    $this->assertTrue($page->hasContent('Your vote was cancelled.'));
    $this->assertTrue($page->hasButton('Vote'), "Vote button appears.");
  }

  /**
   * Tests a poll with auto submit functionality.
   */
  public function testPollAutoSubmit() {
    $poll = $this->poll;
    $poll->setAutoSubmit(TRUE);
    $poll->save();

    // Get a poll.
    $this->drupalGet('poll/' . $poll->id());
    $session = $this->getSession();
    $session->wait(1000, 'jQuery(".messages--status").length > 0');

    // Verify 'Vote' button not appears (visually hidden).
    $this->assertSession()->elementExists('xpath', "//*[@id='edit-vote--" . $poll->id() . "' and contains(@class, 'visually-hidden')]");

    // Click on the first option.
    $radio = $this->getSession()->getPage()->findField('edit-choice-1');
    $name = $radio->getAttribute('name');
    $option = $radio->getAttribute('value');
    $session->getPage()->selectFieldOption($name, $option, FALSE);

    // Give javascript some time to manipulate the DOM.
    $this->assertJsCondition('jQuery(".poll-results-title").is(":visible")');

    // Check to see if the vote was recorded.
    $this->assertTrue($session->getPage()->hasContent('Your vote has been recorded.'), 'Your vote was recorded.');
  }

  /**
   * Tests a poll without auto submit functionality.
   */
  public function testPollWithoutAutoSubmit() {
    $poll = $this->poll;
    $poll->setAutoSubmit(FALSE);
    $poll->save();

    // Get a poll.
    $this->drupalGet('poll/' . $poll->id());
    $session = $this->getSession();
    $session->wait(1000, 'jQuery(".messages--status").length > 0');

    // Verify 'Vote' button appears.
    $this->assertTrue($session->getPage()->hasButton('Vote'), "'Vote' button does not appear.");

    // Click on the first option.
    $radio = $session->getPage()->findField('edit-choice-1');
    $name = $radio->getAttribute('name');
    $option = $radio->getAttribute('value');
    $session->getPage()->selectFieldOption($name, $option, FALSE);

    // Give javascript some time to manipulate the DOM.
    $session->wait(3000, 'jQuery(".messages--status").length > 0');

    // A poll without autosubmit should not submit when clicking
    // on a vote choice.
    $this->assertFalse($session->getPage()->hasContent('Your vote has been recorded.'), 'Your vote was not recorded.');
  }

}
