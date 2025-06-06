<?php

namespace App\Behavioral\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Restaurant implements SplSubject
{

    private SplObjectStorage $observers;
    private int $orderNumber = 0;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();

    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        /* @var SplObserver $observer */

        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function addNewOrder(): void
    {
        $this->orderNumber += 1;
        $this->notify();
    }

    public function getOrderNumber(): int
    {
        return $this->orderNumber;
    }
}