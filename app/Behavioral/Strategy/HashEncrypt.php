<?php

namespace App\Behavioral\Strategy;

class HashEncrypt implements StrategyInterface
{
    public const string TYPE = 'Hash';

    public function encrypt(string $data): array
    {
       return [ hash( 'sha256' ,  $data) , self::TYPE];
    }
}