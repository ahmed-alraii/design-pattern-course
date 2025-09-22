<?php

namespace Tests;

use App\Behavioral\Visitor\Bali;
use App\Behavioral\Visitor\Cairo;
use App\Behavioral\Visitor\Covid19Traveler;
use App\Behavioral\Visitor\London;
use App\Behavioral\Visitor\Sydney;
use App\Behavioral\Visitor\Traveler;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{

    private array $tripPlan;


    protected function setUp(): void
    {
        parent::setUp();
        $this->tripPlan[] = new Cairo();
        $this->tripPlan[] = new Sydney();
        $this->tripPlan[] = new London();
        $this->tripPlan[] = new Bali();

    }

    public function test_can_EG_passport_travel_some_cities()
    {


        // Arrange
        $traveler = new Traveler('EG' , true , 500);

        // Act
        foreach($this->tripPlan as $trip){
            $trip->accept($traveler);
        }

        // Assert
        $this->assertEquals(['Cairo' , 'Bali'] , $traveler->getTripHistory());



    }


    public function test_can_EG_passport_travel_all_cities()
    {


        // Arrange
        $traveler = new Traveler('UK' , true , 5500);

        // Act
        foreach($this->tripPlan as $trip){
            $trip->accept($traveler);
        }

        // Assert
        $this->assertEquals(['Cairo' , 'Sydney' , 'London' , 'Bali'] , $traveler->getTripHistory());

    }

    public function test_can_EG_traveler_travel_some_cities_without_covid_passport()
    {
        // Arrange
        $traveler = new Traveler('UK' , true , 5500);
        $covidTraveler = new Covid19Traveler($traveler , true , false);

        // Act
        foreach($this->tripPlan as $trip){
            $trip->accept($covidTraveler);
        }

        // Assert
        $this->assertEquals(['Cairo'] , $covidTraveler->getTraveler()->getTripHistory());

    }

    public function test_can_EG_traveler_travel_all_cities_with_covid_passport()
    {
        // Arrange
        $traveler = new Traveler('UK' , true , 5500);
        $covidTraveler = new Covid19Traveler($traveler , true , true);

        // Act
        foreach($this->tripPlan as $trip){
            $trip->accept($covidTraveler);
        }

        // Assert
        $this->assertEquals(['Cairo' , 'Sydney' , 'London' , 'Bali'] , $covidTraveler->getTraveler()->getTripHistory());

    }


}