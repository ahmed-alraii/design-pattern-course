<?php

namespace Tests;

use App\Structural\DependencyInjection\DatabaseConfig;
use App\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{

    public function test_can_get_connection_string_from_database_connection_class()
    {

        // Arrange

        $databaseConfig = new DatabaseConfig(
            'localhost',
            'root',
            'password',
            '3306',
            'db_name'
        );

        $databaseConnection = new DatabaseConnection($databaseConfig);

        // Act

        $connectionString = $databaseConnection->getConnectionString();

        // Assert

        $this->assertEquals('mysql://root:password@localhost:3306/db_name' , $connectionString);

    }
}