<?php

namespace App\Structural\DataMapper;

class StorageManager
{

    /**
     * @var string[]
     */

    private array $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }


    public function find(string $id) : array
    {
        return $this->data[$id];
    }

    public function save(array $user): bool
    {
        $this->data[] = $user;
        return true;

    }

}