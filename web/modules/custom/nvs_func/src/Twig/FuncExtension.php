<?php

/**
 * @file
 * Contains \Drupal\nvs_func\Twig\FuncExtension.
 */

namespace Drupal\nvs_func\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Provides the NodeViewCount debugging function within Twig templates.
 */
class FuncExtension extends AbstractExtension {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'getNodeViewCount';
  }

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return array(
      new TwigFunction('getNodeViewCount', array($this, 'getNodeViewCount'), array(
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
  public function getNodeViewCount($nid){
    $s = statistics_get($nid);
    $output = $s['totalcount'];
      return $output;
  }


}
