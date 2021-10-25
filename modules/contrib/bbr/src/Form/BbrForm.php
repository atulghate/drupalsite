<?php

namespace Drupal\bbr\Form;

use Drupal\Core\Form\FormBase;

use Drupal\Core\Form\FormStateInterface;

/**
 * Back Butoon Refresh form class.
 */
class BbrForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'bbr';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#attached']['library'][] = 'bbr/bbr_form';
    $form['bbr_field'] = [
      '#prefix' => '<div style="display:none;">',
      '#type' => 'textfield',
      '#title' => 'Back Button Refresh',
      '#default_value' => 'no',
      '#attributes' => ['id' => 'bbr-input'],
      '#suffix' => '</div>',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }

}
