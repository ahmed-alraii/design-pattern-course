<?php

namespace TokenAuth;

class TokenAuthenticator
{
    public function tokenLogin(string $key , string $token): string
    {
        return  base64_encode($token . ' ' .  $key);

    }

}