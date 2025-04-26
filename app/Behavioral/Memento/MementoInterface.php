<?php

namespace App\Behavioral\Memento;

interface MementoInterface
{
    public function getSnapShot(): mixed;
}