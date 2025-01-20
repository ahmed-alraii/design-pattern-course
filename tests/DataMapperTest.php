<?php

namespace Tests;

use App\Structural\DataMapper\DataMapper;
use App\Structural\DataMapper\StorageManager;
use App\Structural\DataMapper\User;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{

    private StorageManager $manager;
    private array $data;

    protected function setUp(): void
    {
        $this->data = [1 => ['userName' => 'admin', 'password' => 'Aa123456'],
                       2 => ['userName' => 'employee', 'password' => 'Aa123456']];
        $this->manager = new StorageManager($this->data);
    }


    public function test_can_get_user_by_id()
    {
        // Arrange
        $dataMapper = new DataMapper($this->manager);

        // Act
        $user = $dataMapper->findById(id: 1);

        // Assert
        $this->assertEquals($this->data[1] , $user);
    }


    public function test_can_add_user_object()
    {
        // Arrange
        $dataMapper = new DataMapper($this->manager);
        $user =  new User();
        $user->setId(3);
        $user->setUserName('manager');
        $user->setPassword('Aa123456');

        // Act
        $dataMapper->saveUser($user);

        // Assert
        $this->assertEquals($user , $dataMapper->findById(4));

    }


}