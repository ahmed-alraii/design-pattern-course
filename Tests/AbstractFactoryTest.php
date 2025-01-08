<?php

namespace Tests;

use App\Creational\AbstractFactory\BenzCar;
use App\Creational\AbstractFactory\BMWCar;
use App\Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{


    public function test_can_create_bmw_car()
    {

        // Arrange

        $factory = new CarAbstractFactory(200000);

        // Act

        $car = $factory->createBMWCar();

        // Assert

        $this->assertInstanceOf(BMWCar::class , $car);

    }

    public function test_can_create_benz_car()
    {
        // Arrange

        $factory = new CarAbstractFactory(300000);

        // Act

        $car =$factory->createBenzCar();

        // Assert

        $this->assertInstanceOf(BenzCar::class ,$car);

    }

}