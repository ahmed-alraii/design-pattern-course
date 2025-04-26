<?php

namespace App\Behavioral\Memento;

class CareTaker
{

    private Originator $originator;

    private array $mementoes = [];

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function commit()
    {
        $this->mementoes[] = $this->originator->save();
    }

    public function rollBack(): void
    {
        $memento = array_pop($this->mementoes);
        $this->originator->restoreOrCtrlZ($memento);
    }

}