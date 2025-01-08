<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory;

class BenzCar implements CarInterface
{

    private float $price;
    private float $tax;

    public function __construct(float $price , float $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function calculatePrice() : float
    {
       return $this->price + $this->tax + 200000;
    }
}