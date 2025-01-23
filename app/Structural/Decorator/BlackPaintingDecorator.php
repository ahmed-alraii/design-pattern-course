<?php

namespace App\Structural\Decorator;

class BlackPaintingDecorator extends  PaintingDecorator
{
    const string COLOR = '-BLACK';

    public function paint(Car $car) : Car
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }



}