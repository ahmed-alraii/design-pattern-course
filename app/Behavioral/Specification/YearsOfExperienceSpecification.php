<?php

namespace App\Behavioral\Specification;

class YearsOfExperienceSpecification implements SpecificationInterface
{

    private int $minYears;

    public function __construct(int $minYears)
    {
        $this->minYears = $minYears;
    }

    public function isSatisfiedBy(CV $cv): bool
    {
       return $cv->getYearsOfExperience() >= $this->minYears;
    }
}