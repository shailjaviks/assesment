<?php
namespace Drupal\assesment\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Provides a list controller for city entity.
 *
 * @ingroup assesment
 */
class CityListBuilder extends EntityListBuilder {

  

  /**
   * {@inheritdoc}
   *
   * Building the header and content lines for the city list.
   *
   * Calling the parent::buildHeader() adds a column for the possible actions
   * and inserts the 'edit' and 'delete' links as defined for the entity type.
   */
  public function buildHeader() {
    $header['id'] = $this->t('Id');
    $header['title'] = $this->t('Title');
    $header['loc'] = $this->t('Loc');
    $header['pop'] = $this->t('Pop');
    $header['state'] = $this->t('State');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\assesment\Entity\city */
    $row['id'] = $entity->id();
    $row['title'] = $entity->title;
    $row['loc'] = $entity->loc->value;
    $row['pop'] = $entity->pop->value;
    $row['state'] = $entity->state->value;
    return $row + parent::buildRow($entity);
  }

}

?>