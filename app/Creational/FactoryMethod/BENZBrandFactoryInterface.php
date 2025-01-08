<?php

namespace App\Creational\FactoryMethod;

class BENZBrandFactoryInterface implements BrandFactoryInterface
{

    public function buildBrand()
    {
       return new BENZBrand();
    }
}