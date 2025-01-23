<?php

namespace App\Structural\DependencyInjection;

class DatabaseConnection
{


    public function __construct(private readonly DatabaseConfig $config)
    {
    }

    public function getConnectionString(): string
    {
        return sprintf('mysql://%s:%s@%s:%s/%s',
            $this->config->getUsername(),
            $this->config->getPassword(),
            $this->config->getHost(),
            $this->config->getPort(),
            $this->config->getDatabaseName()
        );
    }
}