<?php

/**
 * @file
 * Contains \Drupal\nvs_func\Twig\getThemePath.
 */

namespace Drupal\nvs_func\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Provides the NodeViewCount debugging function within Twig templates.
 */
class BasePathExtension extends AbstractExtension{

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'getThemePath';
  }

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return array(
      new TwigFunction('getThemePath', array($this, 'getThemePath'), array(
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
  public function getThemePath($theme_name){
      $path = \Drupal::service('extension.list.theme')->getPath($theme_name);
      return base_path().$path;
  }


}
