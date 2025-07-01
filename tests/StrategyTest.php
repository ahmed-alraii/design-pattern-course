<?php

namespace Tests;

use App\Behavioral\Strategy\Base64Encrypt;
use App\Behavioral\Strategy\EncryptContext;
use App\Behavioral\Strategy\HashEncrypt;
use App\Behavioral\Strategy\Md5Encrypt;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    private EncryptContext $encryptContext;
    private string $encryptedData;
    private const string TEXT = 'ENCRYPT_ME';

    protected function setUp(): void
    {
       $this->encryptContext = new EncryptContext(new HashEncrypt());
       $this->encryptedData = $this->encryptContext->encryptString(self::TEXT)[0];
    }


    public function test_can_use_hash_encrypt()
    {
        [$data , $type] = $this->encryptContext->encryptString(self::TEXT);

        $this->assertEquals($this->encryptedData , $data);
        $this->assertEquals(HashEncrypt::TYPE , $type);
    }

    public function test_can_user_md5_encrypt()
    {
        $this->encryptContext->setStrategy(new Md5Encrypt());

        [$data , $type] = $this->encryptContext->encryptString(self::TEXT);

        $this->assertNotEquals($this->encryptedData , $data);
        $this->assertEquals(Md5Encrypt::TYPE , $type);
    }

    public function test_can_user_base64_encrypt()
    {
        $this->encryptContext->setStrategy(new Base64Encrypt());

        [$data , $type] = $this->encryptContext->encryptString(self::TEXT);

        $this->assertNotEquals($this->encryptedData , $data);
        $this->assertEquals(Base64Encrypt::TYPE , $type);
    }

}