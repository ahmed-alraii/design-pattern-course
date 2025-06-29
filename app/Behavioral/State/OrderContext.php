<?php

namespace App\Behavioral\State;

class OrderContext
{

    private User $client;

    private State $state;

    private array $orderLogs;


    public function __construct(User $client)
    {
        $this->client = $client;
        $this->state = new CreatedState();
    }

    public function getClient(): User
    {
        return $this->client;
    }

    public function orderProceed()
    {
        $this->state->setOrderContext($this);
        $this->state->proceed();

    }

    public function getOrderLogs(): array
    {
        return $this->orderLogs;
    }

    public function addToOrderLogs(string $log): void
    {
        $this->orderLogs[] = $log;

    }

    public function getState(): State
    {
        return $this->state;
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

}