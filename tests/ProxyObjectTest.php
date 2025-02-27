<?php

namespace Tests;

use App\Structural\ProxyObject\AtmProxy;
use PHPUnit\Framework\TestCase;

class ProxyObjectTest extends TestCase
{

    public function test_can_deposit_from_atm()
    {

        // Arrange
        $proxy = new AtmProxy();

        // Act
        $proxy->deposit(1000);
        $proxy->deposit(5000);

        // Assert
        $this->assertEquals(6000 , $proxy->getBalance());

    }

    public function test_can_withdraw_from_atm()
    {
        // Arrange
        $proxy = new AtmProxy();
        $proxy->deposit(1000);
        $proxy->deposit(5000);

        // Act
        $proxy->withdraw(1000);

        // Assert
         $this->assertEquals(5000 , $proxy->getBalance());

    }

}