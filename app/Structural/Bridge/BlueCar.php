<?php

namespace App\Structural\Bridge;

class BlueCar implements CarColor
{

    public function getColor() : string
    {
       return 'blue';
    }
}