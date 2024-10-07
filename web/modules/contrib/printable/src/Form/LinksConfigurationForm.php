<?php

namespace Drupal\printable\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\printable\PrintableEntityManagerInterface;
use Drupal\printable\PrintableFormatPluginManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides shared configuration form for all printable formats.
 */
class LinksConfigurationForm extends FormBase {

  /**
   * Constructs a new form object.
   *
   * @param \Drupal\printable\PrintableEntityManagerInterface $printable_entity_manager
   *   The printable entity manager.
   * @param \Drupal\printable\PrintableFormatPluginManager $printable_format_manager
   *   The printable format plugin manager.
   * @param \Drupal\Core\Config\ConfigFactory $configFactory
   *   Defines the configuration object factory.
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   The messenger service.
   */
  public function __construct(protected PrintableEntityManagerInterface $printable_entity_manager, protected PrintableFormatPluginManager $printable_format_manager, protected $configFactory, protected $messenger) {}

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('printable.entity_manager'),
      $container->get('printable.format_plugin_manager'),
      $container->get('config.factory'),
      $container->get('messenger')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'links_configuration';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $printable_format = NULL) {

    $config = $this->config('printable.settings');

    $form['settings']['print_print_link_pos'] = [
      '#type' => 'checkboxes',
      '#title' => 'Link location',
      '#default_value' => [],
      '#options' => [
        'node' => $this->t('Links area'),
        'comment' => $this->t('Comment area'),
        'user' => $this->t('User area'),
      ],
      '#description' => $this->t('Choose the location of the link(s) to the printer-friendly version pages. The Links area is usually below the node content, whereas the Comment area is placed near the comments. The user area is near the user name. Select the options for which you want to enable the link. If you select any option then it means that you have enabled printable support for that entity in the configuration tab.'),
    ];
    foreach ($config->get('printable_print_link_locations') as $link_location) {
      $form['settings']['print_print_link_pos']['#default_value'][] = $link_location;
    }

    $form['settings']['exclude_printable_links'] = [
      '#type' => 'checkbox',
      '#title' => 'Exclude printable links',
      '#default_value' => $config->get('exclude_printable_links') ?? TRUE,
      '#description' => $this->t('Exclude the printable links from the list of links present in the page?'),
    ];

    $form['settings']['submit'] = [
      '#type' => 'submit',
      '#value' => 'Submit',
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->configFactory->getEditable('printable.settings')
      ->set('printable_print_link_locations', $form_state->getValue('print_print_link_pos'))
      ->set('exclude_printable_links', $form_state->getValue('exclude_printable_links'))
      ->save();
    $this->messenger()->addStatus($this->t('The configuration option has been saved'));
  }

}
