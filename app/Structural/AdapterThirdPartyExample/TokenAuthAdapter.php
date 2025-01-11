<?php

namespace App\Structural\AdapterThirdPartyExample;

use TokenAuth\TokenAuthenticator;

class TokenAuthAdapter implements AuthenticatorInterface
{

    private TokenAuthenticator $authenticator;

    public function __construct(TokenAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params) : string
    {
      return $this->authenticator->tokenLogin($params['key'] , $params['token']);
    }
}