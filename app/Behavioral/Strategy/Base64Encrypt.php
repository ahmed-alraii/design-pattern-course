<?php

namespace App\Behavioral\Strategy;

class Base64Encrypt implements StrategyInterface
{

    public const string TYPE = 'Base64';
    public function encrypt(string $data): array
    {
        return [ base64_encode($data) , self::TYPE];
    }
}