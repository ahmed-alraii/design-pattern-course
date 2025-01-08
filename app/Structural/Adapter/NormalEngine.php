<?php

namespace App\Structural\Adapter;

class NormalEngine implements EngineInterface
{
    public function startEngine() : string
    {
        return 'Normal Engine Start';
    }
}