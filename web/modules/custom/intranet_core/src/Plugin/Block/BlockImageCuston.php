<?php

namespace Drupal\intranet_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\file\Entity\File;

/**
 * Provides a 'Block image custom' block.
 *
 * @Block(
 *  id = "block_image_custom",
 *  admin_label = @Translation("Bloque imagen custom"),
 * )
 */
class BlockImageCuston extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {

    $form['image'] = [
      '#type' => 'managed_file',
      '#title' => t('Imagen'),
      '#size' => 22,
      '#upload_location' => 'public://',
      '#default_value' => $this->configuration['image'] ?? NULL,
      '#upload_validators' => [
        'file_validate_extensions' => ['jpg png jpeg webp'],
      ],
      '#required' => FALSE,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    if (isset($values['image'][0])) {
      $image = File::load($values['image'][0]);
      $image->setPermanent();
      $image->save();
    }

    $this->configuration['image'] = $values['image'];

  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'block_image_custom';

    $image = $this->configuration['image'][0] ?? 0;
    $url = "";
    if ($image) {
      $image = File::load($this->configuration['image'][0]);
      $url = \Drupal::service('file_url_generator')->generateAbsoluteString($image->getFileUri());
    }

    $build['#image'] = $url;

    return $build;
  }

}
