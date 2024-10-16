<?php

namespace Drupal\intranet_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Entity\EntityDisplayRepositoryInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @file
 * Render a node inside a block.
 */

/**
 * Provides a 'HeaderBlock' block.
 *
 * @Block(
 *   id = "header_block",
 *   admin_label = @Translation("Header Block"),
 *   category = @Translation("INTRANET CORE")
 * )
 */
class HeaderBlock extends BlockBase implements ContainerFactoryPluginInterface {
  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityDisplayRepositoryInterface
   */
  protected $entityDisplayRepository;

  /**
   * Constructs a HeaderBlock instance.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the formatter.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Entity\EntityDisplayRepositoryInterface $entity_display_repository
   *   The entity display repository.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, EntityDisplayRepositoryInterface $entity_display_repository) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->entityDisplayRepository = $entity_display_repository;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
          $configuration,
          $plugin_id,
          $plugin_definition,
          $container->get('entity_display.repository')
      );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {

    return [
      '#title' => "Header Block",
      '#theme' => 'header',
      '#cache' => [
        'max-age' => 0,
        'contexts' => [],
        'tags' => [],
      ],
    ];
  }

}
