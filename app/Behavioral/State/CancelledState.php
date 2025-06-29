<?php

namespace App\Behavioral\State;

class CancelledState extends State
{

    protected string $state = StateEnum::Cancelled->value;

    public function proceed()
    {
        // Do some stuff like: confirm order items are exist and collected


        $this->transitionTo(new ArchivedState());
    }
}