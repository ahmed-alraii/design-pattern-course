<?php

namespace App\Structural\AdapterThirdPartyExample;

interface AuthenticatorInterface
{

    public function login(array $params) : string;

}