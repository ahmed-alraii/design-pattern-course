<?php

namespace Tests;

use App\Structural\Composite\BigBox;
use App\Structural\Composite\GiftBox;
use App\Structural\Composite\SimpleBox;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{

    public function test_can_get_total_price_of_package_tree()
    {
        // Arrange
        $item1 = new SimpleBox(100);
        $item2 = new SimpleBox(300);
        $item3 = new SimpleBox(100);
        $package = new BigBox([$item1 , $item2 , $item3]);
        $package->remove($item3);

        // Act
        $totalPrice = $package->getPrice();

        // Assert
        $this->assertEquals(400 , $totalPrice);

    }

    public function test_can_add_product_to_package_tree()
    {

        // Arrange
        $item1 = new SimpleBox(100);
        $package = new BigBox([$item1]);
        $item2 = new GiftBox(100 , 50);

        // Act
        $package->add($item2);
        $totalPrice = $package->getPrice();

        // Assert
        $this->assertEquals(250 , $totalPrice);

    }

    public function test_can_remove_product_from_package_tree()
    {
        // Arrange
         $item1 = new SimpleBox(400);
         $item2 = new SimpleBox(100);
         $package = new BigBox([$item1 , $item2]);
        // Act
        $package->remove($item2);
        $totalPrice =  $package->getPrice();

        // Assert
        $this->assertEquals(400 , $totalPrice);
    }

}