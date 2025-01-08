<?php

namespace App\Structural\Adapter;

class TurboEngine implements TurboInterface
{

    public function startTurbo() : string
    {
        return 'Turbo Engine Start';
    }
}