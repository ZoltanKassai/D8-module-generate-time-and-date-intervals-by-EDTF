<?php

namespace Drupal\edtf\Service\AutoData;

use Drupal\Core\Datetime\DrupalDateTime;

/**
 *  Auto translate title.
 */
class EdtfDataGenerator {

  /**
   * @param $translatable_entity
   *
   *  Serve all necessary data from edtf
   *
   * @return array
   */
  public function edtfDataGenerator($entity) {
    $tempstore = \Drupal::service('user.private_tempstore')->get('edtf');
    $edtf['date_raw'] = $entity->get('field_date_edtf')->getValue();
    if (!empty($edtf['date_raw'])) {
      $edtf['date_raw'] = array_values($edtf['date_raw'])[0];
      $edtf['date_raw'] = array_values($edtf['date_raw'])[0];
    }
    else {
      $edtf['date_raw'] = '--- edtf datetime spaceholder ---';
    }
    $edtf['min'] = $tempstore->get('edtf_min')->date;
    $edtf['max'] = $tempstore->get('edtf_max')->date;
    $edtf['min_obj'] = new DrupalDateTime($edtf['min']);
    $edtf['max_obj'] = new DrupalDateTime($edtf['max']);
    $edtf['rand_obj'] = new DrupalDateTime($this->randomDate($edtf['min'], $edtf['max']));
    $edtf['min'] = $this->timezoneCorrector($edtf['min_obj']);
    $edtf['max'] = $this->timezoneCorrector($edtf['max_obj']);
    $edtf['rand'] = $this->timezoneCorrector($edtf['rand_obj']);
    return $edtf;
  }

  // Find a randomDate between $start_date and $end_date
  protected function randomDate($start_date, $end_date) {
    // Convert to timetamps
    $min = strtotime($start_date);
    $max = strtotime($end_date);
    // Generate random number using above bounds
    $val = rand($min, $max);
    // Convert back to desired date format
    return date('Y-m-d\TH:i:s', $val);
  }

  // The entity datetime field show data at GMT
  // this function is set up the proper timezone
  protected function timezoneCorrector($datetime_obj) {
    $userTimezone = new \DateTimeZone(drupal_get_user_timezone());
    $gmtTimezone = new \DateTimeZone('GMT');
    $myDateTime = new \DateTime($datetime_obj, $gmtTimezone);
    $offset = $userTimezone->getOffset($myDateTime);
    $myInterval = \DateInterval::createFromDateString((string) $offset . 'seconds');
    $myInterval->invert = 1;
    $myDateTime->add($myInterval);
    $datetime_str = $myDateTime->format('Y-m-d\TH:i:s');
    return $datetime_str;
  }
}
