<?php

namespace Drupal\nvs_widget\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\MapArray;

/**
 * 
 *
 * @Block(
 *   id = "flickrwidget",
 *   admin_label = @Translation("[NVS] Flickr widget"),
 *   category = @Translation("Naviteam widget")
 * )
 */

class FlickrWidget extends BlockBase {

  /**
   * Overrides \Drupal\block\BlockBase::blockForm().
   */

  public function blockForm($form, FormStateInterface $form_state) {
    $form['user_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Your flickr ID'),
      '#description' => $this->t('Eg: <em>78715597@N07</em>'),
      '#required' => TRUE,
      '#default_value' => isset($this->configuration['user_name']) ? $this->configuration['user_name'] : '',
    ];
    $form['record'] = [
      '#type' => 'select',
      '#title' => $this->t('Number of recent photos items to display'),
      '#required' => TRUE,
      '#options' => 
        array(
          2 => $this->t('2'),
          3 => $this->t('3'),
          4 => $this->t('4'),
          5 => $this->t('5'),
          6 => $this->t('6'),
          7 => $this->t('7'),
          8 => $this->t('8'),
          9 => $this->t('9'),
          10 => $this->t('10'),
          11 => $this->t('11'),
          12 => $this->t('12'),
          13 => $this->t('13'),
          14 => $this->t('14'),
          15 => $this->t('15'),
          16 => $this->t('16'),
          17 => $this->t('17'),
          18 => $this->t('18'),
          19 => $this->t('19'),
          20 => $this->t('20'),
          25 => $this->t('25'),
          30 => $this->t('30'),
        ),
      '#default_value' => isset($this->configuration['record']) ? $this->configuration['record'] : '',
    ];
    $form['f_message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Message'),
      '#default_value' => isset($this->configuration['f_message']) ? $this->configuration['f_message'] : '',
    ];
    return $form;
  }

  /**
   * Overrides \Drupal\block\BlockBase::blockSubmit().
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['user_name'] = $form_state->getValue('user_name');
    $this->configuration['record'] = $form_state->getValue('record');
    $this->configuration['f_message'] = $form_state->getValue('f_message');
  }
  public function build() {
    $config = $this->getConfiguration();
    $flickr_id = $config['user_name'];
    $flickr_photos_count = $config['record'];
    if(isset($config['f_message']) && !empty($config['f_message'])){
      $message = $config['f_message'];
    }
    $out = '';
    $out .= '<p>'.($message ? $message : '').'</p>';
    $out .= '<div id="flickr_badge_wrapper" class="photo-stream" data-id="'.$flickr_id.'" data-count="'.$flickr_photos_count.'">
              <ul>
              </ul>
            </div>';
    return [
      '#markup' => $out,
      '#attached' => array(
        'library' =>  array(
          'nvs_widget/widget-lib'
        ),
      ),
    ];
  }
}
