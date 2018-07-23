<?php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class ConstraintNameValidator extends ConstraintValidator
{
    public function validate($value, Constraint $Constraint)
   {
        if (null === $value || '' === $value) {
            return;
        }

        if (!is_string($value)) {
            throw new UnexpectedTypeException($value, 'string');
        }

        if (!preg_match('/^[a-zA-Z]+$/', $value, $matches)) {
            $this->context->buildViolation($Constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
}
