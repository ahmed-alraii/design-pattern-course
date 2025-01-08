<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory;

class BMWCar implements CarInterface
{

    private float $price;

    public function __construct($price)
    {
        $this->price = $price;
    }


    public function calculatePrice() : float
    {
        return $this->price + 120000;
    }
}