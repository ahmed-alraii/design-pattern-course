<?php

namespace App\Behavioral\Visitor;

class Traveler implements VisitorInterface
{


    private string $passport;
    private bool $hotelBooked;
    private int $budget;

    private array $tripHistory = [];

    public function __construct(string $passport, bool $hotelBooked , int $budget)
    {
        $this->passport = $passport;
        $this->hotelBooked = $hotelBooked;
        $this->budget = $budget;
    }

    public function visitCairo(Cairo $cairo): void
    {
        $this->tripHistory[] = 'Cairo';
        $cairo->visitPyramids();
    }

    public function visitLondon(London $london): void
    {
        if($london->allowToVisit($this->passport)){
            $london->goToBigBen();
            $this->tripHistory[] = 'London';
        }
    }

    public function visitSydney(Sydney $sydney): void
    {
        if($sydney->calculateBudget($this->budget)){
            $this->tripHistory[] = 'Sydney';
            $sydney->bookInOpera();
        }
    }

    public function visitBali(Bali $bali): void
    {
        $this->tripHistory[] = 'Bali';
        if($bali->validateVisit($this->passport , $this->hotelBooked)){
            $bali->enjoyKutaBeach();
        }
    }

    public function getTripHistory(): array
    {
        return $this->tripHistory;
    }
}