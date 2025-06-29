<?php

namespace App\Behavioral\State;

class CreatedState extends State
{

    protected string $state = StateEnum::Created->value;

    public function proceed(): void
    {
        // Do some stuff like : add the order to list of orders



        // after some logic go to next state
       $this->transitionTo( new CollectedState());
    }
}