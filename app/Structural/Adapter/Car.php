<?php

namespace App\Structural\Adapter;

class Car
{

    private EngineInterface $engine;

    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function start() : string
    {
       return $this->engine->startEngine();
    }

}