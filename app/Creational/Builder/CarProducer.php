<?php

namespace App\Creational\Builder;

use App\Creational\Builder\CarModels\Car;

class CarProducer
{

    private CarBuilderInterface $builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function produceCar(): Car
    {
        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addDoors();
        $this->builder->addEngine();
        return $this->builder->getCar();
    }


}