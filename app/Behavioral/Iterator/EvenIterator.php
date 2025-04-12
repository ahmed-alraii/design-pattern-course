<?php

namespace App\Behavioral\Iterator;

use Iterator;

class EvenIterator implements  Iterator
{


    private OmanCitiesCollection $citiesCollection;

    private  $index = 0;

    public function __construct(OmanCitiesCollection $citiesCollection)
    {
        $this->citiesCollection = $citiesCollection;
    }

    public function current(): mixed
    {
        return  $this->citiesCollection->getOmanCities()[$this->index];
    }

    public function next(): void
    {
        $this->index = $this->nextEven();
    }

    public function key(): mixed
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return isset($this->citiesCollection->getOmanCities()[$this->index]);
    }

    public function rewind(): void
    {
        $this->index = 0;
    }


    public function nextEven(): ?int
    {
        $maxCount = count($this->citiesCollection->getOmanCities()) - 1;

        for($item = 0; $item < $maxCount  ; $item++ ){
            if(++$this->index % 2 == 0){
                return  $this->index;
            }
            return ++$this->index;
        }
        return null;
    }

}