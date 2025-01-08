<?php

namespace Tests;

use App\Creational\StaticFactory\BenzCar;
use App\Creational\StaticFactory\BmwCar;
use App\Creational\StaticFactory\CarStaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{

    public function test_can_create_bmw_car()
    {

        $this->assertInstanceOf(BmwCar::class , CarStaticFactory::factory('Bmw'));
    }

    public function test_can_create_benz_car()
    {

        $this->assertInstanceOf(BenzCar::class , CarStaticFactory::factory('Benz'));
    }

}