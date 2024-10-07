<?php

/**
 * @file
 * Contains
 *   \Drupal\image_raw_formatter\Plugin\Field\FieldFormatter\ImageRawFormatter.
 */

namespace Drupal\image_raw_formatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Image\ImageFactory;
use Drupal\image\Entity\ImageStyle;
use Drupal\image\Plugin\Field\FieldFormatter\ImageFormatterBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Url;
use Drupal\Core\Utility\LinkGeneratorInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\File\FileUrlGeneratorInterface;

/**
 * Plugin implementation of the 'image_raw_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "image_raw_formatter",
 *   label = @Translation("Image Raw"),
 *   field_types = {
 *     "image"
 *   }
 * )
 */
class ImageRawFormatter extends ImageFormatterBase implements ContainerFactoryPluginInterface {

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
   * The link generator.
   *
   * @var \Drupal\Core\Utility\LinkGeneratorInterface
   */
  protected $linkGenerator;

  /**
   * The image style entity storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $imageStyleStorage;

  /**
   * The image factory.
   *
   * @var \Drupal\Core\Image\ImageFactory
   */
  protected $imageFactory;

  /**
   * The file URL generator.
   *
   * @var \Drupal\Core\File\FileUrlGeneratorInterface
   */
  protected $fileUrlGenerator;

  /**
   * Constructs an ImageFormatter object.
   *
   * @param string $plugin_id
   *   The plugin_id for the formatter.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Field\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the formatter is associated.
   * @param array $settings
   *   The formatter settings.
   * @param string $label
   *   The formatter label display setting.
   * @param string $view_mode
   *   The view mode.
   * @param array $third_party_settings
   *   Any third party settings settings.
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The current user.
   * @param \Drupal\Core\Utility\LinkGeneratorInterface $link_generator
   *   The link generator service.
   * @param \Drupal\Core\Entity\EntityStorageInterface $image_style_storage
   *   The entity storage for the image.
   * @param \Drupal\Core\Image\ImageFactory $image_factory
   *   The image factory.
   * @param \Drupal\Core\File\FileUrlGeneratorInterface $file_url_generator
   *   The file URL generator.
   */
  public function __construct(
    $plugin_id,
    $plugin_definition,
    FieldDefinitionInterface $field_definition,
    array $settings,
    $label,
    $view_mode,
    array $third_party_settings,
    AccountInterface $current_user,
    LinkGeneratorInterface $link_generator,
    EntityStorageInterface $image_style_storage,
    ImageFactory $image_factory,
    FileUrlGeneratorInterface $file_url_generator
  ) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings);
    $this->currentUser = $current_user;
    $this->linkGenerator = $link_generator;
    $this->imageStyleStorage = $image_style_storage;
    $this->imageFactory = $image_factory;
    $this->fileUrlGenerator = $file_url_generator;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $configuration['label'],
      $configuration['view_mode'],
      $configuration['third_party_settings'],
      $container->get('current_user'),
      $container->get('link_generator'),
      $container->get('entity_type.manager')->getStorage('image_style'),
      $container->get('image.factory'),
      $container->get('file_url_generator')
    );
  }

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
        'image_style' => '',
        'image_link' => '',
        'image_markup' => '',
      ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $image_styles = image_style_options(FALSE);

    $element['image_style'] = [
      '#title' => $this->t('Image style'),
      '#type' => 'select',
      '#default_value' => $this->getSetting('image_style'),
      '#empty_option' => $this->t('None (original image)'),
      '#options' => $image_styles,
      '#description' => [
        '#markup' => $this->linkGenerator->generate($this->t('Configure Image Styles'), new Url('entity.image_style.collection')),
        '#access' => $this->currentUser->hasPermission('administer image styles'),
      ],
    ];

    $element['image_markup'] = [
      '#title' => $this->t('Image markup'),
      '#type' => 'checkbox',
      '#default_value' => $this->getSetting('image_markup'),
      '#description' => [
        '#access' => $this->currentUser->hasPermission('administer image styles'),
      ],
    ];

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];

    $image_styles = image_style_options(FALSE);

    // Unset possible 'No defined styles' option.
    unset($image_styles['']);

    // Styles could be lost because of enabled/disabled modules that define
    // their styles in code.
    $image_style_setting = $this->getSetting('image_style');
    if (isset($image_styles[$image_style_setting])) {
      $summary[] = $this->t('Image style: @style', ['@style' => $image_styles[$image_style_setting]]);
    }
    else {
      $summary[] = $this->t('Original image');
    }

    $image_markup_setting = $this->getSetting('image_markup');
    if ($image_markup_setting) {
      $summary[] = $this->t('Image markup enabled.');
    }

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    $files = $this->getEntitiesToView($items, $langcode);

    $image_style_setting = $this->getSetting('image_style');
    $image_markup_setting = $this->getSetting('image_markup');

    // Determine if Image style is required.
    $image_style = NULL;
    if (!empty($image_style_setting)) {
      $image_style = $this->imageStyleStorage->load($image_style_setting);
    }

    foreach ($files as $delta => $file) {
      $image_uri = $file->getFileUri();

      if ($image_style) {
        $absolute_path = $this->imageStyleStorage->load($image_style->getName())
          ->buildUrl($image_uri);
        $image_uri = $this->imageStyleStorage->load($image_style->getName())
          ->buildUri($image_uri);
      }
      else {
        // Get absolute path for original image.
        $absolute_path = $this->fileUrlGenerator->generate($image_uri)->getUri();
      }

      $image_toolkit = $this->imageFactory->get($image_uri)->getToolkit();

      if ($image_markup_setting) {
        $elements[$delta] = [
          '#type' => 'inline_template',
          '#template' => '<img src="{{ path }}" width="{{ width }}" height="{{ height }}" />',
          '#context' => [
            'path' => $absolute_path,
            'width' => $image_toolkit->getWidth(),
            'height' => $image_toolkit->getHeight(),
          ],
        ];
      }
      else {
        $elements[$delta] = [
          '#markup' => $absolute_path,
        ];
      }
    }

    return $elements;
  }

}
