<?php

namespace BasicAuth;

class BasicAuthenticator
{
    public function basicLogin(string $userName , string $password) : string
    {
        return $userName . ' - ' . $password;

    }

}