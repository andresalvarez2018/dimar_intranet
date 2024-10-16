<?php

/**
 * @file
 */

use Drupal\Core\Form\FormStateInterface;
use Drupal\file\Entity\File;

/**
 *
 */
function whites_form_system_theme_settings_alter(&$form, FormStateInterface &$form_state) {

  global $base_url;

  $theme_file = \Drupal::service('extension.list.theme')->getPath('whites') . '/theme-settings.php';

  $build_info = $form_state->getBuildInfo();

  if (!in_array($theme_file, $build_info['files'])) {

    $build_info['files'][] = $theme_file;

  }

  $form_state->setBuildInfo($build_info);

  $form['#submit'][] = 'whites_theme_settings_form_submit';

  $form['settings'] = [

    '#type' => 'details',

    '#title' => t('Theme settings'),

    '#open' => TRUE,

    '#attached' => [

      'library' => [

        'whites/whites-admin-lib',

      ],

    ],

  ];

  $form['settings']['header'] = [

    '#type' => 'details',

    '#title' => t('Header settings'),

    '#open' => FALSE,

  ];

  $form['settings']['header']['logo_config'] = [

    '#type' => 'details',

    '#title' => t('Logos config'),

    '#open' => FALSE,

  ];

  // Middle logo.
  $form['settings']['header']['logo_config']['logo_config_middle_logo'] = [

    '#type' => 'details',

    '#title' => t('Menu middle logo'),

    '#open' => FALSE,

  ];

  $form['settings']['header']['logo_config']['logo_config_middle_logo']['menu_middle_logo'] = [

    '#type' => 'managed_file',

    '#title' => t('Upload logo'),

    '#upload_location' => \Drupal::config('system.file')->get('default_scheme') . '://logos_upload',

    '#default_value' => theme_get_setting('menu_middle_logo', 'whites'),

    '#upload_validators' => [

      'file_validate_extensions' => ['gif png jpg jpeg apng svg'],

      // 'file_validate_image_resolution' => array('960x400','430x400')
    ],

    '#description' => t('If you don\'t jave direct access to the server, use this field to upload your logo. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),

    // '#element_validate' => array('save_image_upload'),
  ];

  // Menu big logo.
  $form['settings']['header']['logo_config']['logo_config_big_logo'] = [

    '#type' => 'details',

    '#title' => t('Menu big logo'),

    '#open' => FALSE,

  ];

  $form['settings']['header']['logo_config']['logo_config_big_logo']['menu_big_logo'] = [

    '#type' => 'managed_file',

    '#title' => t('Upload logo'),

    '#upload_location' => \Drupal::config('system.file')->get('default_scheme') . '://logos_upload',

    '#default_value' => theme_get_setting('menu_big_logo', 'whites'),

    '#upload_validators' => [

      'file_validate_extensions' => ['gif png jpg jpeg apng svg'],

      // 'file_validate_image_resolution' => array('960x400','430x400')
    ],

    '#description' => t('If you don\'t jave direct access to the server, use this field to upload your logo. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),

    // '#element_validate' => array('save_image_upload'),
  ];

  // Menu default.
  $form['settings']['header']['logo_config']['logo_config_default_logo'] = [

    '#type' => 'details',

    '#title' => t('Logo retina '),

    '#open' => FALSE,

  ];

  $form['settings']['header']['logo_config']['logo_config_default_logo']['menu_retina_logo'] = [

    '#type' => 'managed_file',

    '#title' => t('Upload logo'),

    '#upload_location' => \Drupal::config('system.file')->get('default_scheme') . '://logos_upload',

    '#default_value' => theme_get_setting('menu_retina_logo', 'whites'),

    '#upload_validators' => [

      'file_validate_extensions' => ['gif png jpg jpeg apng svg'],

      // 'file_validate_image_resolution' => array('960x400','430x400')
    ],

    '#description' => t('If you don\'t jave direct access to the server, use this field to upload your logo. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),

    // '#element_validate' => array('save_image_upload'),
  ];

  /*  $form['settings']['skin']['skin_layout_style'] = array(

  '#type' => 'select',

  '#title' => t('Layout Style'),

  '#options' => array(

  'wide' => t('Wide'),

  'boxed' => t('Boxed'),

  'none' => t('None'),

  'none2' => t('None2'),

  'none3' => t('None3'),

  'none4' => t('None4'),

  'none5' => t('None5'),

  'none6' => t('None6'),

  ),

  '#default_value' => theme_get_setting('skin_layout_style','whites') ? theme_get_setting('skin_layout_style','whites') : 'wide',

  );

  $form['settings']['skin']['switcher_enable'] = array(

  '#type' => 'select',

  '#title' => t('Switcher enable'),

  '#options' => array(

  'on' => t('ON'),

  'off' => t('OFF'),

  ),

  '#states' => array(

  'visible' => array(

  array(

  ':input[name="skin_layout_style"]' => array('value' => 'none'),

  ),

  array(

  ':input[name="skin_layout_style"]' => array('value' => 'none2')

  ),

  ),

  ),

  '#default_value' => theme_get_setting('switcher_enable','whites'),

  );*/

  /*{"visible":

  {"1":

  [

  [{"[name=\u0022field_pt_style\u0022]":{"value":["none"]}}],

  {"1":{"[name=\u0022field_pt_style\u0022]":{"value":["image"]}}},

  {"2":{"[name=\u0022field_pt_style\u0022]":{"value":["slider"]}}}

  ]

  }

  }*/

  /*  $form['settings']['skin'] = array(

  '#type' => 'details',

  '#title' => t('Switcher Style'),

  '#open' => FALSE,



  );

  $form['settings']['skin']['switcher_enable'] = array(

  '#type' => 'select',

  '#title' => t('Switcher enable'),

  '#options' => array(

  'on' => t('ON'),

  'off' => t('OFF'),

  ),

  '#default_value' => theme_get_setting('switcher_enable','whites'),

  );

  $form['settings']['skin']['skin_layout_style'] = array(

  '#type' => 'select',

  '#title' => t('Layout Style'),

  '#options' => array(

  'wide' => t('Wide'),

  'boxed' => t('Boxed'),

  ),

  '#default_value' => theme_get_setting('skin_layout_style','whites') ? theme_get_setting('skin_layout_style','whites') : 'wide',

  );

  $form['settings']['skin']['built_in_skins'] = array(

  '#type' => 'radios',

  '#title' => t('Predefined colors'),

  '#options' => array(

  'orange' => t('Orange (Default)'),

  'green' => t('Green'),

  'blue' => t('Blue'),

  'yellow' => t('Yellow'),

  'red' => t('Red'),

  'purple' => t('Purple'),

  'pink' => t('Pink'),

  'grey' => t('Grey'),

  ),

  '#required' => true,

  '#default_value' => theme_get_setting('built_in_skins','whites') ? theme_get_setting('built_in_skins','whites') : 'orange',

  );

  $form['settings']['skin']['skin_background_image'] = array(

  '#type' => 'details',

  '#title' => t('Background image'),

  '#open' => TRUE,

  );

  $form['settings']['skin']['skin_background_image']['skin_background_image_base'] = array(

  '#type' => 'radios',

  '#title' => t('Background images base'),

  '#options' => array(

  'bg1' => t('Background image 1 (Default)'),

  'bg2' => t('Background image 2'),

  'bg3' => t('Background image 3'),

  'bg4' => t('Background image 4'),

  'bg5' => t('Background image 5'),

  'bg6' => t('Background image 6'),

  'bg7' => t('Background image 7'),

  'bg8' => t('Background image 8'),

  ),

  '#required' => true,

  '#default_value' => theme_get_setting('skin_background_image_base','whites') ? theme_get_setting('skin_background_image_base','whites') : 'bg1',

  );

  $form['settings']['skin']['skin_background_image']['enable_image_upload'] = array(

  '#type' => 'checkbox',

  '#title' => t('Use background image upload'),

  '#description' => t('Checked on use background image upload'),

  '#default_value' => theme_get_setting('enable_image_upload', 'whites'),

  );

  $form['settings']['skin']['skin_background_image']['skin_background_image_upload'] = array(

  '#type' => 'details',

  '#title' => t('Background image upload'),

  '#open' => TRUE,

  '#states' => array(

  'visible' => array(

  array(

  ':input[name="enable_image_upload"]' => array('checked' => TRUE),

  ),

  ),

  ),

  );

  if(!empty(theme_get_setting('skin_background_image_image','whites'))){

  $form['settings']['skin']['skin_background_image']['skin_background_image_upload']['skin_background_image_preview'] = array(

  '#prefix' => '<div id="skin_background_image_preview">',

  '#markup' => '<img src="'.$base_url.theme_get_setting('skin_background_image_image','whites').'" height="70" width="70" />',

  '#suffix' => '</div>',

  );

  }

  $form['settings']['skin']['skin_background_image']['skin_background_image_upload']['skin_background_image_image'] = array(

  '#type' => 'hidden',

  //'#title' => t('URL of the background image'),

  '#default_value' => theme_get_setting('skin_background_image_image','whites'),

  '#size' => 40,

  //'#disabled' => 'disabled',

  '#maxlength' => 512,

  );

  $form['settings']['skin']['skin_background_image']['skin_background_image_upload']['skin_background_image_upload_upload'] = array(

  '#type' => 'file',

  '#title' => t('Upload background image'),

  '#size' => 40,

  '#attributes' => array('enctype' => 'multipart/form-data'),

  '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),

  '#element_validate' => array('skin_background_image_upload_validate'),



  );*/

  $form['settings']['general_setting'] = [

    '#type' => 'details',

    '#title' => t('General Settings'),

    '#open' => FALSE,

  ];

  $form['settings']['general_setting']['theme_layout'] = [

    '#type' => 'select',

    '#title' => t('Layout'),

    '#options' => [

      'wide' => t('Wide'),

      'boxed' => t('Boxed'),

    ],

    '#required' => TRUE,

    '#default_value' => theme_get_setting('theme_layout', 'whites') ? theme_get_setting('theme_layout', 'whites') : 'wide',

  ];

  $form['settings']['general_setting']['theme_menu_style'] = [

    '#type' => 'select',

    '#title' => t('Menu style'),

    '#options' => [

      'default' => t('Default'),

      'big-logo' => t('Big logo'),

      'classic' => t('Classic'),

      'classic-transparent' => t('Classic transparent'),

      'middle-box' => t('Middle box'),

      'middle-logo' => t('middle logo'),

      'middle-logo-top' => t('Middle logo top'),

      'side' => t('Side'),

    ],

    '#required' => TRUE,

    '#default_value' => theme_get_setting('theme_menu_style', 'whites') ? theme_get_setting('theme_menu_style', 'whites') : 'default',

  ];

  $form['settings']['general_setting']['page_title'] = [

    '#type' => 'details',

    '#title' => t('Page title settings'),

    '#open' => TRUE,

  ];

  $form['settings']['general_setting']['page_title']['page_subtitle'] = [

    '#type' => 'textfield',

    '#title' => t('Subtitle'),

    '#default_value' => theme_get_setting('page_subtitle', 'whites') ? theme_get_setting('page_subtitle', 'whites') : '',

  ];

  $form['settings']['general_setting']['page_title']['theme_page_title_style'] = [

    '#type' => 'select',

    '#title' => t('Page title style'),

    '#options' => [

      'none' => t('No page title'),

      'base-default' => t('Base default'),

      'base-1' => t('Base 1'),

      'base-2' => t('Base 2'),

      'base-3' => t('Base 3'),

      'base-4' => t('Base 4'),

      'animation' => t('Animation'),

      'animation-parallax' => t('Animation-parallax'),

      'bootstrap' => t('Bootstrap'),

      'image' => t('Image'),

      'image-fullscreen' => t('Image fullscreen'),

      'image-fullscreen-parallax' => t('Image fullscreen parallax'),

      'image-parallax' => t('Image parallax'),

      'image-parallax-ken-burn' => t('Image parallax ken burn'),

      'slider' => t('Slider'),

      'slider-fullscreen' => t('Slider fullscreen'),

      'slider-fullscreen-parallax' => t('Slider fullscreen parallax'),

      'slider-parallax' => t('Slider parallax'),

      'video-fullscreen' => t('Video fullscreen'),

      'video-fullscreen-parallax' => t('Video fullscreen parallax'),

      'video-mp4' => t('Video MP4 basic'),

      'video-parallax' => t('Video parallax'),

      'video-youtube' => t('Video youtube'),

    ],

    '#required' => TRUE,

    '#default_value' => theme_get_setting('theme_page_title_style', 'whites') ? theme_get_setting('theme_page_title_style', 'whites') : 'base-default',

  ];

  $form['settings']['general_setting']['page_title']['theme_page_title_icon_class'] = [

    '#type' => 'textfield',

    '#title' => t('Icon class'),

    '#default_value' => theme_get_setting('theme_page_title_icon_class', 'whites'),

    '#description'  => t('Eg: <em>im-angel-smiley, im-pizza-slice,...</em>'),

    '#states' => [

      'visible' => [

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'bootstrap'],

        ],

      ],

    ],

  ];

  $form['settings']['general_setting']['page_title']['theme_page_title_animation_layer'] = [

    '#type' => 'select',

    '#title' => t('Animation layer'),

    '#options' => [

      'none' => t('- None -'),

      'cloud' => t('Cloud'),

      'fog' => t('Fog'),

    ],

    '#default_value' => theme_get_setting('theme_page_title_animation_layer', 'whites') ? theme_get_setting('theme_page_title_animation_layer', 'whites') : 'cloud',

    '#states' => [

      'visible' => [

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'animation'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'animation-parallax'],

        ],

      ],

    ],

  ];

  $form['settings']['general_setting']['page_title']['wrap_bg_2'] = [

    '#type' => 'details',

    '#title' => t('Background image'),

    '#open' => TRUE,

    '#states' => [

      'invisible' => [

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'none'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'base-2'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'bootstrap'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'slider'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'slider-fullscreen'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'slider-fullscreen-parallax'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'slider-parallax'],

        ],

      ],

    ],

  ];

  $form['settings']['general_setting']['page_title']['wrap_bg_2']['background_page_title_image'] = [

    '#type' => 'managed_file',

    '#title' => t('Upload image'),

    '#upload_location' => \Drupal::config('system.file')->get('default_scheme') . '://background_images',

    '#default_value' => theme_get_setting('background_page_title_image', 'whites'),

    '#upload_validators' => [

      'file_validate_extensions' => ['gif png jpg jpeg apng svg'],

      // 'file_validate_image_resolution' => array('960x400','430x400')
    ],

    '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),

    // '#element_validate' => array('save_image_upload'),
  ];

  $form['settings']['general_setting']['page_title']['wrap_bg'] = [

    '#type' => 'details',

    '#title' => t('Slides image'),

    '#open' => TRUE,

    '#states' => [

      'visible' => [

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'slider'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'slider-fullscreen'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'slider-fullscreen-parallax'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'slider-parallax'],

        ],

      ],

    ],

  ];

  $form['settings']['general_setting']['page_title']['wrap_bg']['page_title_slides'] = [

    '#type' => 'managed_file',

    '#multiple' => TRUE,

    '#title' => t('Upload images'),

    '#upload_location' => \Drupal::config('system.file')->get('default_scheme') . '://slides',

    '#default_value' => theme_get_setting('page_title_slides', 'whites'),

    '#upload_validators' => [

      'file_validate_extensions' => ['gif png jpg jpeg apng svg'],

      // 'file_validate_image_resolution' => array('960x400','430x400')
    ],

    '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),

  ];

  // kint(theme_get_setting('background_page_title_slide'));.
  $form['settings']['general_setting']['page_title']['theme_page_title_video_id'] = [

    '#type' => 'textfield',

    '#title' => t('Video ID'),

    '#default_value' => theme_get_setting('theme_page_title_video_id', 'whites'),

    '#description'  => t('Allowed video id youtube.<br>Eg: <em>bKZf39YqcnM</em>'),

    '#states' => [

      'visible' => [

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'video-youtube'],

        ],

      ],

    ],

  ];

  $form['settings']['general_setting']['page_title']['wrap_bg_1'] = [

    '#type' => 'details',

    '#title' => t('Video MP4'),

    '#open' => TRUE,

    '#states' => [

      'visible' => [

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'video-fullscreen'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'video-fullscreen-parallax'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'video-mp4'],

        ],

        [

          ':input[name="theme_page_title_style"]' => ['value' => 'video-parallax'],

        ],

      ],

    ],

  ];

  $form['settings']['general_setting']['page_title']['wrap_bg_1']['background_page_title_video_mp4'] = [

    '#type' => 'managed_file',

    '#title' => t('Upload video MP4'),

    '#description' => t('If you don\'t jave direct access to the server, use this field to upload your video. Only MP4 extensions'),

    '#upload_location' => \Drupal::config('system.file')->get('default_scheme') . '://upload_videos',

    '#default_value' => theme_get_setting('background_page_title_video_mp4', 'whites'),

    '#upload_validators' => [

      'file_validate_extensions' => ['mp4'],

      'file_validate_size' => [50 * 1024 * 1024],

    ],

    // '#element_validate' => array('save_video_upload'),
  ];

  /*  if(!empty(theme_get_setting('page_title_background','whites'))){

  $form['settings']['general_setting']['page_title']['background_page_title_preview'] = array(

  '#prefix' => '<div id="background_page_title_preview">',

  '#markup' => '<img src="'.$base_url.theme_get_setting('page_title_background','whites').'" height="37" width="148" />',

  '#suffix' => '</div>',

  );

  }

  $form['settings']['general_setting']['page_title']['page_title_background'] = array(

  '#type' => 'hidden',

  //'#title' => t('URL of the background image'),

  '#default_value' => theme_get_setting('page_title_background','whites'),

  '#size' => 40,

  //'#disabled' => 'disabled',

  '#maxlength' => 512,

  );

  $form['settings']['general_setting']['page_title']['background_page_title_upload'] = array(

  '#type' => 'file',

  '#title' => t('Upload background image'),

  '#size' => 40,

  '#attributes' => array('enctype' => 'multipart/form-data'),

  '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),

  '#element_validate' => array('background_page_title_validate'),



  );*/

  $form['settings']['general_setting']['general_setting_tracking_code'] = [

    '#type' => 'textarea',

    '#title' => t('Tracking Code'),

    '#default_value' => theme_get_setting('general_setting_tracking_code', 'whites'),

  ];

  // Blog settings.
  $form['settings']['blog'] = [

    '#type' => 'details',

    '#title' => t('Blog settings'),

    '#open' => FALSE,

  ];

  $form['settings']['blog']['blog_listing'] = [

    '#type' => 'details',

    '#title' => t('Blog listing'),

    '#open' => FALSE,

  ];

  $form['settings']['blog']['blog_listing']['blog_listing_style'] = [

    '#type' => 'select',

    '#title' => t('Listing style'),

    '#options' => [

      'classic' => t('Classic'),

      'grid' => t('Grid'),

      'minimal' => t('Minimal'),

    ],

    '#default_value' => theme_get_setting('blog_listing_style', 'whites') ? theme_get_setting('blog_listing_style', 'whites') : 'classic',

  ];

  $form['settings']['blog']['blog_listing']['blog_page_title'] = [

    '#type' => 'details',

    '#title' => t('Page title settings'),

    '#open' => TRUE,

  ];

  $form['settings']['blog']['blog_listing']['blog_page_title']['blog_page_subtitle'] = [

    '#type' => 'textfield',

    '#title' => t('Subtitle'),

    '#default_value' => theme_get_setting('blog_page_subtitle', 'whites') ? theme_get_setting('blog_page_subtitle', 'whites') : '',

  ];

  $form['settings']['blog']['blog_listing']['blog_page_title']['blog_page_title_style'] = [

    '#type' => 'select',

    '#title' => t('Page title style'),

    '#options' => [

      'none' => t('No page title'),

      'base-default' => t('Base default'),

      'base-1' => t('Base 1'),

      'base-2' => t('Base 2'),

      'base-3' => t('Base 3'),

      'base-4' => t('Base 4'),

      'animation' => t('Animation'),

      'animation-parallax' => t('Animation-parallax'),

      'bootstrap' => t('Bootstrap'),

      'image' => t('Image'),

      'image-fullscreen' => t('Image fullscreen'),

      'image-fullscreen-parallax' => t('Image fullscreen parallax'),

      'image-parallax' => t('Image parallax'),

      'image-parallax-ken-burn' => t('Image parallax ken burn'),

      'slider' => t('Slider'),

      'slider-fullscreen' => t('Slider fullscreen'),

      'slider-fullscreen-parallax' => t('Slider fullscreen parallax'),

      'slider-parallax' => t('Slider parallax'),

      'video-fullscreen' => t('Video fullscreen'),

      'video-fullscreen-parallax' => t('Video fullscreen parallax'),

      'video-mp4' => t('Video MP4 basic'),

      'video-parallax' => t('Video parallax'),

      'video-youtube' => t('Video youtube'),

    ],

    '#required' => TRUE,

    '#default_value' => theme_get_setting('blog_page_title_style', 'whites') ? theme_get_setting('blog_page_title_style', 'whites') : 'base-default',

  ];

  $form['settings']['blog']['blog_listing']['blog_page_title']['blog_page_title_icon_class'] = [

    '#type' => 'textfield',

    '#title' => t('Icon class'),

    '#default_value' => theme_get_setting('blog_page_title_icon_class', 'whites'),

    '#description'  => t('Eg: <em>im-angel-smiley, im-pizza-slice,...</em>'),

    '#states' => [

      'visible' => [

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'bootstrap'],

        ],

      ],

    ],

  ];

  $form['settings']['blog']['blog_listing']['blog_page_title']['blog_page_title_animation_layer'] = [

    '#type' => 'select',

    '#title' => t('Animation layer'),

    '#options' => [

      'none' => t('- None -'),

      'cloud' => t('Cloud'),

      'fog' => t('Fog'),

    ],

    '#default_value' => theme_get_setting('blog_page_title_animation_layer', 'whites') ? theme_get_setting('blog_page_title_animation_layer', 'whites') : 'cloud',

    '#states' => [

      'visible' => [

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'animation'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'animation-parallax'],

        ],

      ],

    ],

  ];

  $form['settings']['blog']['blog_listing']['blog_page_title']['wrap_bg_22'] = [

    '#type' => 'details',

    '#title' => t('Background image'),

    '#open' => TRUE,

    '#states' => [

      'invisible' => [

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'none'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'base-2'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'bootstrap'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'slider'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'slider-fullscreen'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'slider-fullscreen-parallax'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'slider-parallax'],

        ],

      ],

    ],

  ];

  $form['settings']['blog']['blog_listing']['blog_page_title']['wrap_bg_22']['blog_background_page_title_image'] = [

    '#type' => 'managed_file',

    '#title' => t('Upload image'),

    '#upload_location' => \Drupal::config('system.file')->get('default_scheme') . '://background_images',

    '#default_value' => theme_get_setting('blog_background_page_title_image', 'whites'),

    '#upload_validators' => [

      'file_validate_extensions' => ['gif png jpg jpeg apng svg'],

      // 'file_validate_image_resolution' => array('960x400','430x400')
    ],

    '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),

    // '#element_validate' => array('save_image_upload'),
  ];

  $form['settings']['blog']['blog_listing']['blog_page_title']['wrap_bg00'] = [

    '#type' => 'details',

    '#title' => t('Slides image'),

    '#open' => TRUE,

    '#states' => [

      'visible' => [

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'slider'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'slider-fullscreen'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'slider-fullscreen-parallax'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'slider-parallax'],

        ],

      ],

    ],

  ];

  $form['settings']['blog']['blog_listing']['blog_page_title']['wrap_bg00']['blog_page_title_slides'] = [

    '#type' => 'managed_file',

    '#multiple' => TRUE,

    '#title' => t('Upload images'),

    '#upload_location' => \Drupal::config('system.file')->get('default_scheme') . '://slides',

    '#default_value' => theme_get_setting('blog_page_title_slides', 'whites'),

    '#upload_validators' => [

      'file_validate_extensions' => ['gif png jpg jpeg apng svg'],

      // 'file_validate_image_resolution' => array('960x400','430x400')
    ],

    '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),

  ];

  // kint(theme_get_setting('background_page_title_slide'));.
  $form['settings']['blog']['blog_listing']['blog_page_title']['blog_page_title_video_id'] = [

    '#type' => 'textfield',

    '#title' => t('Video ID'),

    '#default_value' => theme_get_setting('blog_page_title_video_id', 'whites'),

    '#description'  => t('Allowed video id youtube.<br>Eg: <em>bKZf39YqcnM</em>'),

    '#states' => [

      'visible' => [

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'video-youtube'],

        ],

      ],

    ],

  ];

  $form['settings']['blog']['blog_listing']['blog_page_title']['wrap_bg_11'] = [

    '#type' => 'details',

    '#title' => t('Video MP4'),

    '#open' => TRUE,

    '#states' => [

      'visible' => [

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'video-fullscreen'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'video-fullscreen-parallax'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'video-mp4'],

        ],

        [

          ':input[name="blog_page_title_style"]' => ['value' => 'video-parallax'],

        ],

      ],

    ],

  ];

  $form['settings']['blog']['blog_listing']['blog_page_title']['wrap_bg_11']['blog_background_page_title_video_mp4'] = [

    '#type' => 'managed_file',

    '#title' => t('Upload video MP4'),

    '#description' => t('If you don\'t jave direct access to the server, use this field to upload your video. Only MP4 extensions'),

    '#upload_location' => \Drupal::config('system.file')->get('default_scheme') . '://upload_videos',

    '#default_value' => theme_get_setting('blog_background_page_title_video_mp4', 'whites'),

    '#upload_validators' => [

      'file_validate_extensions' => ['mp4'],

      'file_validate_size' => [50 * 1024 * 1024],

    ],

    // '#element_validate' => array('save_video_upload'),
  ];

  /*  if(!empty(theme_get_setting('listing_page_title_background','whites'))){

  $form['settings']['blog']['blog_listing']['listing_background_page_title_preview'] = array(

  '#prefix' => '<div id="listing_background_page_title_preview">',

  '#markup' => '<img src="'.$base_url.theme_get_setting('listing_page_title_background','whites').'" height="37" width="148" />',

  '#suffix' => '</div>',

  );

  }

  $form['settings']['blog']['blog_listing']['listing_page_title_background'] = array(

  '#type' => 'hidden',

  //'#title' => t('URL of the background image'),

  '#default_value' => theme_get_setting('listing_page_title_background','whites'),

  '#size' => 40,

  //'#disabled' => 'disabled',

  '#maxlength' => 512,

  );

  $form['settings']['blog']['blog_listing']['listing_background_page_title_upload'] = array(

  '#type' => 'file',

  '#title' => t('Upload background image page title'),

  '#size' => 40,

  '#attributes' => array('enctype' => 'multipart/form-data'),

  '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),

  '#element_validate' => array('background_page_title_validate'),

  );

  $form['settings']['blog']['blog_listing']['listing_mode_demo'] = array(

  '#type' => 'checkbox',

  '#title' => t('Display mode demo'),

  '#description' => t('The possible values this field can contain. Enter value, in the format <em>key=value</em> on URL.<br/>

  <table class="table table-striped table-bordered whites-table-theme-settings">

  <thead>

  <tr>

  <th>key</th>

  <th>value</th>

  </tr>

  </thead>

  <tbody>

  <tr>

  <td>layout</td>

  <td>

  <ul style="list-style:none">

  <li><em>grid</em></li>

  <li><em>medium</em></li>

  <li><em>large</em></li>

  </ul>

  </td>

  </tr>

  <tr>

  <td>sidebar</td>

  <td>

  <ul style="list-style:none">

  <li><em>left</em></li>

  <li><em>right</em></li>

  <li><em>none</em></li>

  </ul>

  </td>

  </tr>

  </tbody>

  </table>'),

  '#default_value' => theme_get_setting('listing_mode_demo', 'whites'),

  );

  $form['settings']['blog']['blog_listing']['listing_layout'] = array(

  '#type' => 'select',

  '#title' => t('Listing layout'),

  '#options' => array(

  'grid' => t('Grid'),

  'medium' => t('Medium (default)'),

  'large' => t('Large'),

  ),

  '#required' => TRUE,

  '#default_value' => theme_get_setting('listing_layout', 'whites') ? theme_get_setting('listing_layout', 'whites') : 'medium',

  );

  $form['settings']['blog']['blog_listing']['listing_sidebar'] = array(

  '#type' => 'select',

  '#title' => t('Listing layout'),

  '#options' => array(

  'left' => t('Left sidebar'),

  'right' => t('Right sidebar (default)'),

  'none' => t('No sidebar'),

  ),

  '#required' => TRUE,

  '#default_value' => theme_get_setting('listing_sidebar', 'whites') ? theme_get_setting('listing_sidebar', 'whites') : 'right',

  );*/

  // Custom css.
  $form['settings']['custom_css'] = [

    '#type' => 'details',

    '#title' => t('Custom CSS'),

    '#open' => FALSE,

  ];

  $form['settings']['custom_css']['custom_css'] = [

    '#type' => 'textarea',

    '#title' => t('Custom CSS'),

    '#default_value' => theme_get_setting('custom_css', 'whites'),

    '#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }'),

  ];

  /*  $form['settings']['contact_page'] = array(

  '#type' => 'details',

  '#title' => t('Contact page'),

  '#open' => FALSE,

  );

  if(!empty(theme_get_setting('contact_page_title_background','whites'))){

  $form['settings']['contact_page']['contact_page_title_preview'] = array(

  '#prefix' => '<div id="contact_page_title_preview">',

  '#markup' => '<img src="'.$base_url.theme_get_setting('contact_page_title_background','whites').'" height="37" width="148" />',

  '#suffix' => '</div>',

  );

  }

  $form['settings']['contact_page']['contact_page_title_background'] = array(

  '#type' => 'hidden',

  //'#title' => t('URL of the background image'),

  '#default_value' => theme_get_setting('contact_page_title_background','whites'),

  '#size' => 40,

  //'#disabled' => 'disabled',

  '#maxlength' => 512,



  );



  $form['settings']['contact_page']['contact_page_title_upload'] = array(

  '#type' => 'file',

  '#title' => t('Upload background image'),

  '#size' => 40,

  '#attributes' => array('enctype' => 'multipart/form-data'),

  '#description' => t('If you don\'t jave direct access to the server, use this field to upload your background image. Uploads limited to .png .gif .jpg .jpeg .apng .svg extensions'),

  '#element_validate' => array('background_page_title_validate'),



  );

  //

  $form['settings']['contact_page']['contact_page_googlemaps'] = array(

  '#type' => 'textarea',

  '#title' => t('Google Maps Embed Code'),

  '#default_value' => theme_get_setting('contact_page_googlemaps', 'whites'),

  '#description' => t('Get code see <a href="https://developers.google.com/maps/documentation/embed/guide">here</a>'),

  );

  $form['settings']['contact_page']['contact_heading'] = array(

  '#type' => 'textarea',

  '#title' => t('Heading'),

  '#default_value' => theme_get_setting('contact_heading', 'whites'),

  );



  $form['settings']['contact_page']['contact_address'] = array(

  '#type' => 'textarea',

  '#title' => t('Address widget'),

  '#default_value' => theme_get_setting('contact_address', 'whites'),

  );*/

  /* $form['settings']['footer'] = array(

  '#type' => 'details',

  '#title' => t('Footer setings'),

  '#open' => FALSE,

  );
   */

  /*  $form['settings']['footer']['footer_social_networks'] = array(

  '#type' => 'textarea',

  '#title' => t('Social networks'),

  '#default_value' => theme_get_setting('footer_social_networks', 'whites') ? theme_get_setting('footer_social_networks', 'whites') : '',

  );

  $form['settings']['footer']['footer_copyright_text'] = array(

  '#type' => 'textarea',

  '#title' => t('Copyright text'),

  '#default_value' => theme_get_setting('footer_copyright_text', 'whites') ? theme_get_setting('footer_copyright_text', 'whites') : '',

  );   */

}

/**
 * Background_page_title_validate.
 */
function whites_theme_settings_form_submit(&$form, FormStateInterface $form_state) {
  // $account = \Drupal::currentUser();
  $values = $form_state->getValues();

  $_wfiles = [
    $values['page_title_slides'],
    $values['background_page_title_image'],
    $values['background_page_title_video_mp4'],
    // Blog.
    $values['blog_page_title_slides'],
    $values['blog_background_page_title_image'],
    $values['blog_background_page_title_video_mp4'],
    // Logo.
    $values['menu_middle_logo'],
    $values['menu_big_logo'],
    $values['menu_retina_logo'],
  ];

  foreach ($_wfiles as $wfile) {
    if (isset($wfile) && !empty($wfile) && is_array($wfile)) {
      foreach ($wfile as $fid) {
        // Cargar el archivo utilizando la entidad 'file'.
        $file = File::load($fid);

        if ($file) {
          // Cambiar el estado a permanente.
          $file->setPermanent();
          $file->save();

          $file_usage = \Drupal::service('file.usage');
          $file_usage->add($file, 'whites', 'theme', 1);
        }
      }
    }
  }
}
