<?php

namespace App\Creational\Builder;

use App\Creational\Builder\CarModels\Car;

interface CarBuilderInterface
{

    public function createCar();
    public function addEngine();
    public function addDoors();
    public function addBody();
    public function addWheel();
    public function getCar() : Car;

}