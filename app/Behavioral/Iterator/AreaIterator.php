<?php

namespace App\Behavioral\Iterator;


use Iterator;

class AreaIterator implements Iterator
{


    private OmanCitiesCollection $citiesCollection;

    private array $sortedCitiesCollection;
    private int $index = 0;

    public function __construct(OmanCitiesCollection $citiesCollection)
    {
        $this->citiesCollection = $citiesCollection;
        $this->sortByArea();
    }

    public function current(): mixed
    {
       return $this->sortedCitiesCollection[$this->index];
    }

    public function next(): void
    {
        $this->index += 1;
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


    private function sortByArea()
    {

        $areas = [];
        $this->sortedCitiesCollection = $this->citiesCollection->getOmanCities();
        foreach ($this->citiesCollection->getOmanCities() as $key => $city){
            $areas[] = $city->getArea();
        }

        array_multisort($areas , SORT_DESC , $this->sortedCitiesCollection);

    }
}