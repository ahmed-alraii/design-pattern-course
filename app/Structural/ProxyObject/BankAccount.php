<?php

namespace App\Structural\ProxyObject;

class BankAccount implements BankAccountInterface
{

    private array $transactions = [];

    public function deposit(float $amount): void
    {
       $this->transactions[] = +$amount;
    }

    public function withdraw(float $amount): float|bool
    {
      if($this->getBalance() > $amount){
          $this->transactions[] = -$amount;
          var_dump(array_sum($this->transactions));
          return $amount;
      }

      return false;

    }

    public function getBalance(): float
    {

      return array_sum($this->transactions);
    }
}