<?php

namespace App\Behavioral\Iterator;

use IteratorAggregate;
use Traversable;

class OmanCitiesCollection implements IteratorAggregate
{

    private array $omanCities = [];

    /* @var City $city */
    public function addCity(City $city): OmanCitiesCollection
    {
        $this->omanCities[] = $city;
        return $this;
    }

    public function removeCity(string $name)
    {
        foreach ($this->omanCities as $index => $city) {
            if ($city->getName() === $city) {
                unset($this->omanCities[$index]);
            }
        }
    }

    public function getOmanCities(): array
    {
        return $this->omanCities;
    }


    public function getIterator(): Traversable
    {
       return new OddIterator($this);
    }

    public function getEvenIterator(): EvenIterator
    {
        return new EvenIterator($this);
    }

    public function getAreaIterator(): AreaIterator
    {
        return new AreaIterator($this);
    }
}