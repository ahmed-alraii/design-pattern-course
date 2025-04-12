<?php

namespace App\Behavioral\Iterator;

class City
{


    private string $name;
    private string $area;

    public function __construct(string $name , string $area)
    {
        $this->name = $name;
        $this->area = $area;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getArea(): string
    {
        return $this->area;
    }
}