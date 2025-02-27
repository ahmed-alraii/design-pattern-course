<?php

namespace App\Structural\ProxyObject;

class AtmProxy extends BankAccount implements BankAccountInterface
{

    private float|null $balance = null;

    public function getBalance(): float
    {
        if ($this->balance === null || $this->balance != parent::getBalance()) {
            return $this->balance = parent::getBalance();
        }

        return $this->balance;

    }

}