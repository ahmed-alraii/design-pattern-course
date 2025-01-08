<?php

namespace Tests;


use App\Creational\Builder\BENZCarBuilder;
use App\Creational\Builder\BMWCarBuilder;
use App\Creational\Builder\CarModels\BENZCar;
use App\Creational\Builder\CarModels\BMWCar;
use App\Creational\Builder\CarProducer;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{


    public function test_produce_bmw_car_success()
    {
        // Arrange
        $builder = new BMWCarBuilder();
        $carProducer = new CarProducer($builder);

        // Act
        $car = $carProducer->produceCar();

        // Assert
        $this->assertInstanceOf(BMWCar::class, $car);

    }

    public function test_produce_benz_car_success()
    {
       // Arrange
        $builder = new BENZCarBuilder();
        $carProducer = new CarProducer($builder);

        // Act
        $car = $carProducer->produceCar();

        // Assert
        $this->assertInstanceOf(BENZCar::class, $car);
    }
}