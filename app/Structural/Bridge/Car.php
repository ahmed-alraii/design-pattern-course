<?php

namespace App\Structural\Bridge;

abstract class Car
{

    protected CarColor $carColor;

    public function __construct(CarColor $carColor)
    {
        $this->carColor = $carColor;
    }

    abstract public function getProduct() : string;

}