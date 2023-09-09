<?php


namespace Drupal\assesment\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Language\Language;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the assesment entity edit forms.
 *
 * @ingroup assesment
 */
class CityForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\assesment\Entity\city */
    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;

    $form['title'] = array(
      '#title' => $this->t('Title'),
      '#type' => 'textfield',
      '#default_value' => $entity->title->value,
    );
    $form['loc'] = array(
        '#title' => $this->t('Loc'),
        '#type' => 'textfield',
        '#default_value' => $entity->loc->value,
      );
      $form['pop'] = array(
        '#title' => $this->t('pop'),
        '#type' => 'textfield',
        '#default_value' => $entity->pop->value,
      );
      $form['state'] = array(
        '#title' => $this->t('state'),
        '#type' => 'textfield',
        '#default_value' => $entity->state->value,
      );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $form_state->setRedirect('entity.city.collection');
    $entity = $this->getEntity();
    $entity->save();
  }
}

?>