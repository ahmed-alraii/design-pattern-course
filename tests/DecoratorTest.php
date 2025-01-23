<?php

namespace Tests;

use App\Structural\Decorator\BlackPaintingDecorator;
use App\Structural\Decorator\BluePaintingDecorator;
use App\Structural\Decorator\Car;
use App\Structural\Decorator\Painting;
use App\Structural\Decorator\RedPaintingDecorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{


    public function test_can_paint_car_with_black_and_blue_colors()
    {
        // Arrange
        $car = new Car();
        $painting = new Painting();
        $painting = new BlackPaintingDecorator($painting);
        $painting = new BluePaintingDecorator($painting);

        // Act
         $painting->paint($car);

        // Assert
        $this->assertEquals('-BLUE-BLACK' , $car->getColor());
    }

    public function test_can_paint_car_with_red_and_blue_colors()
    {
        // Arrange
        $car = new Car();
        $painting = new Painting();
        $painting = new RedPaintingDecorator($painting);
        $painting = new BluePaintingDecorator($painting);

        // Act
        $painting->paint($car);

        // Assert
        $this->assertEquals('-BLUE-RED' , $car->getColor());

    }


}