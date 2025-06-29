<?php

namespace App\Behavioral\State;

class PaidState extends State
{

    protected string $state = StateEnum::Paid->value;

    private bool $paymentStatus;

    public function proceed()
    {
       $this->paymentStatus = $this->getContext()->getClient()->isPaymentExist();

       if($this->paymentStatus){
           $this->transitionTo(new DeliveredState());
       }else{
           $this->transitionTo(new CancelledState());
       }
    }
}