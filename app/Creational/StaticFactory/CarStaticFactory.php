<?php

namespace App\Creational\StaticFactory;

class CarStaticFactory
{

    public static function factory(string $type) : Car|null
    {

        if($type === "Bmw"){
            return new BmwCar();
        }elseif ($type === "Benz"){
            return new BenzCar();
        }
            return  null;

    }

}