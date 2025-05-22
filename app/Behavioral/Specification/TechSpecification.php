<?php

namespace App\Behavioral\Specification;

class TechSpecification implements SpecificationInterface
{
    private string $tech;

    public function __construct(string $tech)
    {
        $this->tech = $tech;
    }

    public function isSatisfiedBy(CV $cv): bool
    {
        return in_array($this->tech , $cv->getTech() , true);
    }
}