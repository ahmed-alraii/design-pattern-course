<?php

namespace App\Creational\Builder;

use App\Creational\Builder\CarModels\BENZCar;
use App\Creational\Builder\CarModels\BMWCar;
use App\Creational\Builder\CarModels\Car;

class BMWCarBuilder implements CarBuilderInterface
{

    private Car $type;

    public function createCar()
    {
        $this->type = new BMWCar();
    }

    public function addEngine()
    {
       $this->type->setPart('engine' , 'BMW-Engine');
    }

    public function addDoors()
    {
       $this->type->setPart('door' , 'BMW-Door');
    }

    public function addBody()
    {
        $this->type->setPart('body' , 'BMW-Body');
    }

    public function addWheel()
    {
        $this->type->setPart('wheel' , 'BMW-Wheel');
    }

    public function getCar(): Car
    {
      return  $this->type;
    }
}