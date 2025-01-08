<?php

namespace App\Creational\Pool;

use DateTime;

class Car
{
    private DateTime $rentAt;
    public function __construct()
    {
        $this->rentAt = new DateTime();
    }

    public function moveCar()
    {
        return "Car is moving";

    }

}