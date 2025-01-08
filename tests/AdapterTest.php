<?php

namespace Tests;

use App\Structural\Adapter\Car;
use App\Structural\Adapter\EngineAdapter;
use App\Structural\Adapter\NormalEngine;
use App\Structural\Adapter\TurboEngine;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{

    public function test_can_start_normal_engine()
    {

        // Arrange
        $engine = new NormalEngine();
        $car = new Car($engine);

        // Act
       $res = $car->start();

        // Assert
        $this->assertEquals('Normal Engine Start' , $res );

    }


    public function test_can_start_turbo_engine()
    {

        // Arrange
        $engine = new TurboEngine();
        $adapter = new EngineAdapter($engine);
        $car = new Car($adapter);

        // Act
        $res = $car->start();

        // Assert
        $this->assertEquals('Turbo Engine Start' , $res );

    }


}