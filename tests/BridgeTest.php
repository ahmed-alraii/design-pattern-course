<?php

namespace Tests;

use App\Structural\Bridge\BenzCar;
use App\Structural\Bridge\BlueCar;
use App\Structural\Bridge\BmwCar;
use App\Structural\Bridge\CarColor;
use App\Structural\Bridge\RedCar;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{


    public function test_can_create_blue_bmw_car()
    {

        // Arrange
        $carColor = new BlueCar();

        // Act
        $bmwCar = new BmwCar($carColor);
        $res = $bmwCar->getProduct();

        //Assert
        $this->assertEquals('the car type is BMW and the car color is blue', $res);
    }


    public function test_can_create_red_bmw_car()
    {
        // Arrange
        $carColor = new RedCar();

        // Act
        $bmwCar = new BmwCar($carColor);
        $res = $bmwCar->getProduct();

        // Assert
        $this->assertEquals('the car type is BMW and the car color is red', $res);


    }


    public function test_can_create_blue_benz_car()
    {

        // Arrange
        $carColor = new BlueCar();

        // Act
        $benzCar = new BenzCar($carColor);
        $res = $benzCar->getProduct();

        // Assert
        $this->assertEquals('the car type is BENZ and the car color is blue', $res);
    }

    public function test_can_create_red_benz_car()
    {

        // Arrange
        $carColor = new RedCar();

        // Act
        $benzCar = new BenzCar($carColor);
        $res = $benzCar->getProduct();

        // Assert
        $this->assertEquals('the car type is BENZ and the car color is red', $res);


    }


}