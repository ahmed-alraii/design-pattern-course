<?php

namespace App\Behavioral\Mediator;

class RightRoad extends Road
{

    const string ID = 'Right';

    function getId(): string
    {
        return self::ID;
    }
}