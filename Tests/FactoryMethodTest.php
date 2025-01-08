<?php

namespace Tests;

use App\Creational\FactoryMethod\BENZBrand;
use App\Creational\FactoryMethod\BENZBrandFactoryInterface;
use App\Creational\FactoryMethod\BMWBrand;
use App\Creational\FactoryMethod\BMWBrandFactoryInterface;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{


    public function test_can_build_bmw_brand()
    {

        // Arrange
        $brandFactory = new BMWBrandFactoryInterface();

        // Act
        $brand = $brandFactory->buildBrand();

        //Assert
        $this->assertInstanceOf(BMWBrand::class , $brand);


    }

    public function test_can_build_benz_brand()
    {

        // Arrange
        $brandFactory = new BENZBrandFactoryInterface();

        // Act

        $brand = $brandFactory->buildBrand();

        // Assert

        $this->assertInstanceOf(BENZBrand::class , $brand);

    }

}