<?php

namespace Drupal\edtf\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use ComputerMinds\EDTF\EDTFInfoFactory;

/**
 * Validates the EDTF constraint.
 */
class EdtfDateValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($items, Constraint $constraint) {
    foreach ($items as $item) {
      $factory = new EDTFInfoFactory();
      $dateInfo = $factory->create($item->value);
      $valid = $dateInfo->isValid();
      if ($valid) {
        $min = $dateInfo->getMin();
        $max = $dateInfo->getMax();
        $tempstore = \Drupal::service('user.private_tempstore')->get('edtf');
        $tempstore->set('edtf_max', $max);
        $tempstore->set('edtf_min', $min);
      }
      else {
        $this->context->addViolation($constraint->notValid, ['%value' => $item->value]);
      }
    }
  }
}
