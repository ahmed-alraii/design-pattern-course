<?php

namespace App\Structural\Bridge;

class BenzCar extends Car
{


    public function __construct(CarColor $carColor)
    {
        parent::__construct($carColor);
    }

    public function getProduct() : string
    {
        return sprintf("the car type is %s and the car color is %s" , 'BENZ' , $this->carColor->getColor());

    }
}