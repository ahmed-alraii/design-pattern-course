<?php

namespace App\Behavioral\Mediator;

interface MediatorInterface
{

    public function action(Road $road , string $event);

}