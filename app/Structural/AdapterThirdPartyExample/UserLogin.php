<?php

namespace App\Structural\AdapterThirdPartyExample;

use BasicAuth\BasicAuthenticator;

class UserLogin
{


    private AuthenticatorInterface $authenticator;

    public function __construct(AuthenticatorInterface $authenticator)
    {

        $this->authenticator = $authenticator;
    }

    public function login(array $params) : string
    {

        return $this->authenticator->login($params);

    }

}