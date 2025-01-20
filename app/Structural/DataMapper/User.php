<?php

namespace App\Structural\DataMapper;

class User
{

    private int $id;
    private  string $userName;
    private  string $password;


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function getUserName() : string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }


    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


    public function getPassword(): string
    {
        return $this->password;
    }

}