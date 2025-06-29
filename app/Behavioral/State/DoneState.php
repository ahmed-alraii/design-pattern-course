<?php

namespace App\Behavioral\State;

class DoneState extends State
{

    protected string $state = StateEnum::Done->value;

    public function proceed()
    {

        // Do nothing
        $this->transitionTo(new ArchivedState());
    }
}