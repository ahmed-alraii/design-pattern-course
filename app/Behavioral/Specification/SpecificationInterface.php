<?php

namespace App\Behavioral\Specification;

interface SpecificationInterface
{

    public function isSatisfiedBy(CV $cv): bool;

}