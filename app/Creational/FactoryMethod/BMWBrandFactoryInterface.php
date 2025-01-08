<?php

namespace App\Creational\FactoryMethod;

class BMWBrandFactoryInterface implements BrandFactoryInterface
{

    public function buildBrand()
    {
       return new BMWBrand();
    }
}