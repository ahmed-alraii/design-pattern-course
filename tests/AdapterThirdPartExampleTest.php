<?php

namespace Tests;

use App\Structural\AdapterThirdPartyExample\BasicAuthAdapter;
use App\Structural\AdapterThirdPartyExample\TokenAuthAdapter;
use App\Structural\AdapterThirdPartyExample\UserLogin;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;

class AdapterThirdPartExampleTest extends TestCase
{

    /**
     * @throws Exception
     */
    public function test_can_auth_with_auth_basic_lib()
    {

        // Arrange
        $basicAuthAdapter = $this->createMock(BasicAuthAdapter::class);
        $basicAuthAdapter->expects($this->once())
            ->method('login')
            ->willReturn('test - password');

        $userLogin = new UserLogin($basicAuthAdapter);

        // Act
        $res = $userLogin->login(['username' => 'test' , 'password' => 'password']);


        // Assert
        $this->assertEquals('test - password' , $res);
    }

    /**
     * @throws Exception
     */
    public function test_can_auth_with_auth_token_lib()
    {
        // Arrange
        $tokenAuthAdapter = $this->createMock(TokenAuthAdapter::class);
        $tokenAuthAdapter->expects($this->once())
                         ->method('login')
                         ->willReturn(base64_encode('key - token'));
        $userLogin = new UserLogin($tokenAuthAdapter);

        // Act
        $res = $userLogin->login(['key' => 'test' , 'token' => 'password']);

        // Assert
        $this->assertEquals(base64_encode('key - token') , $res);

    }


}