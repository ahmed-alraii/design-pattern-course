<?php

namespace App\Behavioral\Visitor;

class Covid19Traveler implements VisitorInterface
{

    private Traveler $traveler;
    private bool $pcr;
    private bool $covidPass;

    public function __construct(Traveler $traveler , bool $pcr , bool $covidPass)
    {
        $this->traveler = $traveler;
        $this->pcr = $pcr;
        $this->covidPass = $covidPass;
    }

    public function visitCairo(Cairo $cairo): void
    {
        if($this->pcr){
           $this->traveler->visitCairo($cairo);
        }
    }

    public function visitLondon(London $london)
    {
        if($this->covidPass){
            $this->traveler->visitLondon($london);
        }
    }

    public function visitSydney(Sydney $sydney): void
    {
        if($this->covidPass){
            $this->traveler->visitSydney($sydney);
        }
    }

    public function visitBali(Bali $bali): void
    {
       if($this->pcr && $this->covidPass){
           $this->traveler->visitBali($bali);
       }
    }

    public function getTraveler(): Traveler
    {
        return $this->traveler;
    }

}