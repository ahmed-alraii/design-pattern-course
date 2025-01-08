<?php

namespace Tests;

use App\Creational\Pool\Car;
use App\Creational\Pool\CarPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    private CarPool $carPool;
    protected function setUp(): void
    {
        parent::setUp();

        $this->carPool = new CarPool();
    }

    public function test_can_rent_car()
    {

        // Act
        $car = $this->carPool->rentCar();

        // Assert
        $this->assertInstanceOf( Car::class, $car);
        $this->assertEquals(1 , $this->carPool->getBusyCarsCount());

    }


    public function test_can_free_car()
    {

        // Arrange
        $car = $this->carPool->rentCar();


        // Act
        $this->carPool->freeCar($car);

        // Assert

        $this->assertEquals(1 , $this->carPool->getFreeCarsCount());

    }

}