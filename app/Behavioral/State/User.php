<?php

namespace App\Behavioral\State;

class User
{

    private string $name;

    private string $address;

    private bool $paymentExist;

    public function __construct(string $name , string $address , bool $paymentExist)
    {
        $this->address = $address;
        $this->paymentExist = $paymentExist;
        $this->name = $name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function isPaymentExist(): bool
    {
        return $this->paymentExist;
    }

    public function setPaymentExist(bool $paymentExist): void
    {
        $this->paymentExist = $paymentExist;
    }


}