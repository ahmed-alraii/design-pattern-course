<?php

namespace Tests;

use App\Behavioral\State\OrderContext;
use App\Behavioral\State\StateEnum;
use App\Behavioral\State\User;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{

    public function test_can_create_order()
    {
        $user = new User('salim' , 'Oman' , true);
        $order = new OrderContext($user);

        $this->assertEquals(StateEnum::Created->value , $order->getState()->getState()) ;

    }

    public function test_can_move_order_from_created_to_archived()
    {
        // arrange
        $user = new User('salim' , 'Oman' , true);
        $order = new OrderContext($user);

        // act
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();

        // assert
        $this->assertEquals(StateEnum::Archived->value , $order->getState()->getState());



    }


    public function test_can_move_order_from_created_to_cancelled()
    {
        // arrange
        $user = new User('salim' , 'Oman' , false);
        $order = new OrderContext($user);

        // act
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();

        // assert
        $this->assertEquals(StateEnum::Cancelled->value , $order->getState()->getState());

    }



}