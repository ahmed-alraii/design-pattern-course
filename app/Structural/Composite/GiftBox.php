<?php

namespace App\Structural\Composite;

class GiftBox implements  ProductInterface , GiftInterface
{

    private float $price;
    private float $giftPrice;

    public function __construct(float $price , float $giftPrice)
    {
        $this->price = $price;
        $this->giftPrice = $giftPrice;
    }

    public function getPrice() : float
    {
        return $this->price + $this->giftPackagePrice();
    }

    public function giftPackagePrice() : float
    {
        return $this->giftPrice;
    }

}