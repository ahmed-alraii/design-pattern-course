<?php

namespace App\Behavioral\Specification;

class SkillSpecification implements SpecificationInterface
{

    private string $skill;

    public function __construct(string $skill)
    {
        $this->skill = $skill;
    }

    public function isSatisfiedBy(CV $cv): bool
    {
       return in_array($this->skill, $cv->getSkills() , true);
    }
}