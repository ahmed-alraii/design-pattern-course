<?php

namespace App\Behavioral\State;

class DeliveredState extends State
{

    protected string $state = StateEnum::Delivered->value;

    public function proceed()
    {
        // Do something

        $this->transitionTo(new DoneState());
    }

}