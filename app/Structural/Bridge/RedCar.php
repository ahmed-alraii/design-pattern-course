<?php

namespace App\Structural\Bridge;

class RedCar implements CarColor
{
    public function getColor() : string
    {
      return 'red';
    }
}