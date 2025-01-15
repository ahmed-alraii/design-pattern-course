<?php

namespace App\Structural\Composite;

class SimpleBox implements ProductInterface
{

    private float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice() : float
    {
        return $this->price;
    }
}