<?php

namespace App\Creational\Builder;

use App\Creational\Builder\CarModels\BENZCar;
use App\Creational\Builder\CarModels\Car;

class BENZCarBuilder implements CarBuilderInterface
{

    private Car $type;

    public function createCar()
    {
        $this->type = new BENZCar();
    }

    public function addEngine()
    {
        $this->type->setPart('engine' , 'BENZ-Engine');
    }

    public function addDoors()
    {
        $this->type->setPart('door' , 'BENZ-Door');
    }

    public function addBody()
    {
        $this->type->setPart('body' , 'BENZ-Body');
    }

    public function addWheel()
    {
        $this->type->setPart('wheel' , 'BENZ-Wheel');
    }

    public function getCar(): Car
    {
        return  $this->type;
    }
}