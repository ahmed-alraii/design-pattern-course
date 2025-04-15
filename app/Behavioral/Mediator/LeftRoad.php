<?php

namespace App\Behavioral\Mediator;

class LeftRoad extends Road
{

    const string ID = 'Left';

    function getId(): string
    {
        return self::ID;
    }
}