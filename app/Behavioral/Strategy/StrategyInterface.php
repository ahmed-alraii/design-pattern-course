<?php

namespace App\Behavioral\Strategy;

interface StrategyInterface
{

    public function encrypt(string $data): array;

}