<?php

namespace Tests;

use App\Creational\SimpleFactory\Car;
use App\Creational\SimpleFactory\CarFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{

    public function test_can_create_car()
    {

        // Arrange
        $carFactory = new CarFactory();

        // Act
        $car = $carFactory->createCar("BMW");


        // Assert
        $this->assertInstanceOf(Car::class , $car);

    }

}