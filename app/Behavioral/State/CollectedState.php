<?php

namespace App\Behavioral\State;

class CollectedState extends State
{

    protected string $state = StateEnum::Collected->value;

    public function proceed()
    {


        // Payment is failed , Order is cancelled
        $this->transitionTo(new PaidState());
    }
}