<?php

namespace Tests;

use App\Behavioral\Specification\AgeSpecification;
use App\Behavioral\Specification\AndSpecification;
use App\Behavioral\Specification\CV;
use App\Behavioral\Specification\LanguageSpecification;
use App\Behavioral\Specification\OrSpecification;
use App\Behavioral\Specification\SkillSpecification;
use App\Behavioral\Specification\SpecialCaseSpecification;
use App\Behavioral\Specification\TechSpecification;
use App\Behavioral\Specification\YearsOfExperienceSpecification;
use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase
{

    private function getSeniorBackEndDevSpecification(): AndSpecification
    {
        $yearOfExp = new YearsOfExperienceSpecification(5);
        $ageSpec = new AgeSpecification(25 , 30);
        $phpSpec = new LanguageSpecification('php');
        $javaSpec = new LanguageSpecification('java');
        $gitSpec = new TechSpecification('git');
        $dockerSped = new TechSpecification('docker');
        $problemSolvingSpec = new SkillSpecification('problem-solving');

       return new AndSpecification(
          $yearOfExp,
          $ageSpec,
          $phpSpec,
          $javaSpec,
          $gitSpec,
          $dockerSped,
          $problemSolvingSpec
        );

    }

    private function getJuniorBackEndDevSpecification(): AndSpecification
    {
        $yearOfExp = new YearsOfExperienceSpecification(2);
        $ageSpec = new AgeSpecification(20 , 25);
        $phpSpec = new LanguageSpecification('php'); // Or
        $javaSpec = new LanguageSpecification('java');
        $gitSpec = new TechSpecification('git');

        return new AndSpecification(
            $yearOfExp,
            $ageSpec,
            $gitSpec,
            new OrSpecification($phpSpec , $javaSpec),
        );

    }
    private function getJuniorBackEndDevSpecificationWithSpecialCase(): OrSpecification
    {
        $yearOfExp = new YearsOfExperienceSpecification(2);
        $ageSpec = new AgeSpecification(20 , 25);
        $phpSpec = new LanguageSpecification('php'); // Or
        $javaSpec = new LanguageSpecification('java');
        $gitSpec = new TechSpecification('git');
        $specialCaseSpec = new SpecialCaseSpecification();

        $juniorSpecification = new AndSpecification(
            $yearOfExp,
            $ageSpec,
            $gitSpec,
            new OrSpecification($phpSpec , $javaSpec),
        );


        return new OrSpecification($juniorSpecification , $specialCaseSpec);
    }

    public function test_can_match_cv_with_senior_specifications()
    {
        $cv = new CV( 6 , ['problem-solving'], 30 , ['git' , 'docker' , 'ci/cd'] , ['php' ,'java' , 'node'] );

        $this->assertTrue($this->getSeniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    public function test_can_match_cv_with_junior_specifications()
    {
        $cv = new CV( 3 , ['problem-solving'], 24 , ['git'] , ['java'] );

        $this->assertTrue($this->getJuniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    public function test_can_not_match_cv_with_senior_specifications_if_age_is_not_satisfied()
    {
        $cv = new CV( 6 , ['problem-solving'], 36 , ['git' , 'docker' , 'ci/cd'] , ['php' ,'java' , 'node'] );

        $this->assertFalse($this->getSeniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }


    public function test_can_not_match_cv_with_senior_specifications_if_language_is_not_satisfied()
    {
        $cv = new CV( 6 , ['problem-solving'], 36 , ['git' , 'docker' , 'ci/cd'] , ['node'] );

        $this->assertFalse($this->getSeniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }


    public function test_can_not_match_cv_with_junior_specifications_if_age_is_not_satisfied()
    {
        $cv = new CV( 6 , ['problem-solving'], 40 , ['git' , 'docker' , 'ci/cd'] , ['php' ,'java' , 'node'] );

        $this->assertFalse($this->getJuniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    public function test_can_match_cv_with_junior_specifications_with_special_case()
    {
        $cv = new CV( 6 , [], 45 , ['git'] , ['vb.net'] );

        $this->assertTrue($this->getJuniorBackEndDevSpecificationWithSpecialCase()->isSatisfiedBy($cv));
    }



}