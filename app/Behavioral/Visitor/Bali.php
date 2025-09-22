<?php

namespace App\Behavioral\Visitor;

class Bali implements CityInterface
{

    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitBali($this);
    }

    public function validateVisit(string $passport , bool $hotelBooked)
    {
        return$hotelBooked && in_array($passport , ['EG' , 'UK' , 'DE']);

    }

    public function enjoyKutaBeach(): void
    {
       echo 'kuta beach';
    }
}