<?php

namespace Tests;

use App\Creational\ProtoType\AutomaticCarProtoType;
use App\Creational\ProtoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;

class ProtoTypeTest extends TestCase
{

    public function test_can_create_automatic_cars_with_clone()
    {
        $originalCar = new AutomaticCarProtoType();

        for($i = 1; $i <= 10; $i++){
            $newCar = clone $originalCar;
            $this->assertInstanceOf(AutomaticCarProtoType::class , $newCar);
        }
    }

    public function test_can_create_manual_cars_with_clone()
    {
        $originalCar = new ManualCarProtoType();

        for($i = 1; $i <= 10; $i++){
            $newCar = clone $originalCar;
            $this->assertInstanceOf(ManualCarProtoType::class , $newCar);
        }
    }

}