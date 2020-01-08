<?php

namespace Drupal\edtf\Service\AutoTitle;

use Drupal\Core\Datetime\DrupalDateTime;


/**
 *  Auto translate title.
 */
class TitleGenerator {

  /**
   *  @param $translatable_entity
   */
  public function autoTitle($entity) {
    $edtf = \Drupal::service('edtf.data_generator')->edtfDataGenerator($entity);
    $entity->field_min_date_edtf->value = $edtf['min'];
    $entity->field_max_date_edtf->value = $edtf['max'];
    $entity->field_random_date_edtf->value = $edtf['rand'];

    // Generate rich date (interval) names
    // https://www.php.net/manual/en/function.date.php
    $min_obj = $edtf['min_obj'];
    $max_obj = $edtf['max_obj'];
    $min_str = $min_obj->format('l, F j, Y');
    $max_str = $max_obj->format('l, F j, Y');
    // Single year
    $date_str = $edtf['date_raw'];
    // If not an interval
    $date_str = $min_str . " – " . $max_str;
    $entity->setTitle($date_str);
  }
}
