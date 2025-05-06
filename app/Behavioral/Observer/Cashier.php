<?php

namespace App\Behavioral\Observer;

use SplObserver;
use SplSubject;

class Cashier implements SplObserver
{

    private string $state;
    public function update(SplSubject $subject): void
    {
        /* @var Restaurant $subject */

        $this->state = sprintf("Cashier is ready for order number %s" , $subject->getOrderNumber());
    }

    /**
     * @return mixed
     */
    public function getState(): string
    {
        return $this->state;
    }
}