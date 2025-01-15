<?php

namespace App\Structural\Composite;

class BigBox implements ProductInterface , ActionsInterface
{

    /**
     * @var ProductInterface[]
     */
    private array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function getPrice()
    {
        $totalPrice = 0;

        foreach ($this->products as $product){
            $totalPrice += $product->getPrice();
        }

        return $totalPrice;
    }

    public function add(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function remove(ProductInterface $product)
    {

        foreach ($this->products as $index => $item ){
           if($item->getPrice() == $product->getPrice()){
               unset($this->products[$index]);
               break;
           }
        }
    }
}