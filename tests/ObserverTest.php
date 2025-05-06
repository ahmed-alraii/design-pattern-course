<?php

namespace Tests;

use App\Behavioral\Observer\Cashier;
use App\Behavioral\Observer\Kitchen;
use App\Behavioral\Observer\Restaurant;
use App\Behavioral\Observer\Waiter;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{

    private Restaurant $restaurant;
    private Waiter $waiter;
    private Kitchen $kitchen;
    private Cashier $cashier;
    protected function setUp(): void
    {
        $this->restaurant = new Restaurant();
        $this->waiter = new Waiter();
        $this->kitchen = new Kitchen();
        $this->cashier = new Cashier();

        $this->restaurant->attach($this->waiter);
        $this->restaurant->attach($this->kitchen);
        $this->restaurant->attach($this->cashier);
    }

    public function test_can_notify_all_observers_when_new_order_is_created()
    {
        $this->restaurant->addNewOrder();

        $this->assertEquals('Waiter is ready for order number 1' , $this->waiter->getState());
        $this->assertEquals('Kitchen is ready for order number 1' , $this->kitchen->getState());
        $this->assertEquals('Cashier is ready for order number 1' , $this->cashier->getState());
    }


    public function test_can_notify_all_observers_when_two_new_orders_is_created()
    {
        $this->restaurant->addNewOrder();
        $this->restaurant->addNewOrder();

        $this->assertEquals('Waiter is ready for order number 2' , $this->waiter->getState());
        $this->assertEquals('Kitchen is ready for order number 2' , $this->kitchen->getState());
        $this->assertEquals('Cashier is ready for order number 2' , $this->cashier->getState());
    }




}