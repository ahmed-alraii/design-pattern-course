<?php

namespace App\Behavioral\Visitor;

interface VisitorInterface
{
    public function visitCairo(Cairo $cairo);

    public function visitLondon(London $london);

    public function visitSydney(Sydney $sydney);

    public function visitBali(Bali $bali);

}