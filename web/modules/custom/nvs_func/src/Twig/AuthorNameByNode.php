<?php

/**
 * @file
 * Contains \Drupal\nvs_func\Twig\AuthorNameByNode
 */
namespace Drupal\nvs_func\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AuthorNameByNode extends AbstractExtension {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'getAuthorNameByNode';
  }

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return array(
      new TwigFunction('getAuthorNameByNode', array($this, 'getAuthorNameByNode'), array(
        'is_safe' => array('html'),

      )),
    );
  }

  /**
   * Provides Kint function to Twig templates.
   *
   * Handles 0, 1, or multiple arguments.
   *
   * Code derived from https://github.com/barelon/CgKintBundle.
   *
   * @param Twig_Environment $env
   *   The twig environment instance.
   * @param array $context
   *   An array of parameters passed to the template.
   */
  public function getAuthorNameByNode($nid){
    $node = \Drupal\node\Entity\Node::load($nid);
    $author_uid = $node->getRevisionAuthor()->uid->value;
    $account = \Drupal\user\Entity\User::load($author_uid);
    if($account->field_full_name){
		  $build_full_name = $account->field_full_name->view('default');
	    $full_name_with_link = \Drupal::service('renderer')->renderRoot($build_full_name);
	    $full_name_with_link_cs = strip_tags(render($full_name_with_link),'<a>');
	  }else{
		  $full_name_with_link_cs = '';
	  }
    return $full_name_with_link_cs;
  }

}
