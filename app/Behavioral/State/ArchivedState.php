<?php

namespace App\Behavioral\State;

class ArchivedState extends State
{

    protected string $state = StateEnum::Archived->value;

    public function proceed()
    {
        // Do Nothing
    }

    protected function transitionTo(State $state): void
    {
        // Do Nothing

    }
}