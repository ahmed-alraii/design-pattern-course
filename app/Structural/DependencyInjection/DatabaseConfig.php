<?php

namespace App\Structural\DependencyInjection;

class DatabaseConfig
{
//    private string $username;
//    private string $password;
//    private string $port;
//    private string $host;
    public function __construct(
        private readonly string $host,
        private readonly string $username,
        private readonly string $password,
        private readonly string $port,
        private readonly string $databaseName
    )
    {
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getPort(): string
    {
        return $this->port;
    }

    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }


}