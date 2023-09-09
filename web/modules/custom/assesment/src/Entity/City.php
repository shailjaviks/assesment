<?php

namespace Drupal\assesment\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the city entity.
 *
 * @ingroup city
 *
 * @ContentEntityType(
 *   id = "city",
 *   label = @Translation("city"),
 *  handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\assesment\Entity\Controller\CityListBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "form" = {
 *       "add" = "Drupal\assesment\Form\CityForm",
 *       "edit" = "Drupal\assesment\Form\CityForm",
 *       "delete" = "Drupal\assesment\Form\CityDeleteForm",
 *     },
 *     "access" = "Drupal\assesment\CityAccessControlHandler",
 *   },
 *   base_table = "city",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "Title" = "title",
 *     "Loc" = "loc",
 *     "Pop" = "pop",
 *     "State" = "state",
 *   },
 *  links = {
 *     "canonical" = "/city/{city}",
 *     "edit-form" = "/city/{city}/edit",
 *     "delete-form" = "/city/{city}/delete",
 *     "collection" = "/city/list"
 *   },
 * )
 */

class City extends ContentEntityBase implements ContentEntityInterface {

  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    // Standard field, used as unique if primary index.
    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('The ID of the City entity.'))
      ->setReadOnly(TRUE);

    // Standard field, unique outside of the scope of the current project.
    $fields['uuid'] = BaseFieldDefinition::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('The UUID of the City entity.'))
      ->setReadOnly(TRUE);

    $fields['title'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Title'))
      ->setDescription(t('The title of the City entity.'));
      
      $fields['loc'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Loc'))
      ->setDescription(t('The GPS Coordinates of this Destination.'))
      ->setRevisionable(TRUE);
      
      
    $fields['pop'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Pop'))
      ->setDescription(t('The pop of the City entity.'));
      
    $fields['state'] = BaseFieldDefinition::create('string')
      ->setLabel(t('State'))
      ->setDescription(t('The state of the City entity.'));
      
  

    return $fields;
  }
}