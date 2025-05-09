<?php

namespace App\Creational\Builder\CarModels;

class BMWCar extends Car
{

    private array $data = [];

    public function setPart($name , $value) : void
    {
        $this->data[$name] = $value;
    }

}