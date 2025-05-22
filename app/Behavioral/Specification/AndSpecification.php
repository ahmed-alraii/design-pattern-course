<?php

namespace App\Behavioral\Specification;

class AndSpecification implements SpecificationInterface
{

    private array $specifications;

    public function __construct(SpecificationInterface ...$specifications )
    {
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy(CV $cv): bool
    {
       foreach ($this->specifications as $spec)
       {
           if(!$spec->isSatisfiedBy($cv)){
               return false;
           }
       }
       return true;
    }
}