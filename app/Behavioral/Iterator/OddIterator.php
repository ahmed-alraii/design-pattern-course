<?php

namespace App\Behavioral\Iterator;

class OddIterator implements \Iterator
{

    private OmanCitiesCollection $citiesCollection;

    private  $index = 1;

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
       $this->index = $this->nextOdd();
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
        $this->index = 1;
    }


    public function nextOdd(): ?int
    {
        $maxCount = count($this->citiesCollection->getOmanCities()) - 1;

        for($item = 0; $item < $maxCount  ; $item++ ){
            if(++$this->index % 2 == 1){
              return  $this->index;
            }
            return ++$this->index;

        }


        return null;
    }
}