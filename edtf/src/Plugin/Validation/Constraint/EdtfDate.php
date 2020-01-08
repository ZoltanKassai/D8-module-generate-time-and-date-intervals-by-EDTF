<?php

namespace Drupal\edtf\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 *
 * https://www.drupal.org/docs/8/api/entity-api/entity-validation-api/providing-a-custom-validation-constraint
 *
 * Checks that the submitted value is a valid EDTF date.
 *
 * @Constraint(
 *   id = "EdtfDate",
 *   label = @Translation("Valid EDTF", context = "Validation"),
 *   type = "string"
 * )
 */

class EdtfDate extends Constraint {

  public $notValid = '%value is not a valid edtf date-time';

}
