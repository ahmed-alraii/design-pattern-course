<?php

namespace App\Behavioral\State;

abstract class State
{


    protected string $state;

    private OrderContext $context;

    public function setOrderContext(OrderContext $context): void
    {
        $this->context = $context;
        $this->addStateToLog();
        
    }

    abstract public function proceed();

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    protected function transitionTo(State $state): void
    {
        $this->getContext()->setState($state);
    }


    public function getContext(): OrderContext
    {
        return $this->context;
    }

    public function setContext(OrderContext $context): void
    {
        $this->context = $context;
    }


    public function addStateToLog(): void
    {
        $this->getContext()->addToOrderLogs($this->state);

    }

}