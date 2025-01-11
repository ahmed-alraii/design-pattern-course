<?php

namespace App\Structural\AdapterThirdPartyExample;

use BasicAuth\BasicAuthenticator;

class BasicAuthAdapter implements AuthenticatorInterface
{
    private BasicAuthenticator $authenticator;

    public function __construct(BasicAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params) : string
    {
        return $this->authenticator->basicLogin($params['username'] , $params['password']);
    }
}