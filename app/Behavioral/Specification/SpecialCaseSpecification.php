<?php

namespace App\Behavioral\Specification;

class SpecialCaseSpecification implements SpecificationInterface
{

    public function isSatisfiedBy(CV $cv): bool
    {
       return true;
    }
}