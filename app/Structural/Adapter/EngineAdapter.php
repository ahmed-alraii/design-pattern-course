<?php

namespace App\Structural\Adapter;

class EngineAdapter implements EngineInterface
{

    private TurboEngine $engine;

    public function __construct(TurboEngine $engine)
    {
        $this->engine = $engine;
    }

    public function startEngine() : string
    {
      return $this->engine->startTurbo();
    }
}