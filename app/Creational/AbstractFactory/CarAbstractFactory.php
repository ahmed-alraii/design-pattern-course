<?php

namespace App\Creational\AbstractFactory;

class CarAbstractFactory
{

    private float $tax = 100000;

    private float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function createBMWCar() : BMWCar
    {
        return new BMWCar($this->price);
    }

    public function createBenzCar() : BenzCar
    {
        return new BenzCar($this->price , $this->tax);
    }

}