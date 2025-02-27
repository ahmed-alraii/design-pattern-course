<?php

namespace App\Structural\ProxyObject;

interface BankAccountInterface
{

    public function deposit(float $amount): void;

    public function withdraw(float $amount): float|bool;

    public function getBalance(): float;

}