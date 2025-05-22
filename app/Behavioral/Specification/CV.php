<?php

namespace App\Behavioral\Specification;

class CV
{

    private int $yearsOfExperience;
    private array $skills;
    private int $age;
    private array $tech;
    private array $languages;

    public function __construct(int $yearsOfExperience , array $skills , int $age , array $tech , array $languages)
    {
        $this->yearsOfExperience = $yearsOfExperience;
        $this->skills = $skills;
        $this->age = $age;
        $this->tech = $tech;
        $this->languages = $languages;
    }

    public function getSkills(): array
    {
        return $this->skills;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getTech(): array
    {
        return $this->tech;
    }

    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function getYearsOfExperience(): int
    {
        return $this->yearsOfExperience;
    }

}