<?php

namespace App\Structural\Decorator;

class BluePaintingDecorator extends PaintingDecorator
{
    const string COLOR = '-BLUE';

    public function paint(Car $car) : Car
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }


}