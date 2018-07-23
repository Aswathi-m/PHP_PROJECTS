<?php
namespace AppBundle\Validator\Constraints;

use symfony\Component\Validator\Constraint;
/**
 * @Annotation
 */
class ConstraintName extends Constraint
{
    public $message = "Please enter a valid name";
}
?>
