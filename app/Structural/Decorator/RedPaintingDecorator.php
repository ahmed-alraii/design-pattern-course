<?php

namespace App\Structural\Decorator;

class RedPaintingDecorator extends PaintingDecorator
{
    const string COLOR = '-RED';

    public function paint(Car $car) : Car
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }


}