<?php

declare(strict_types=1);

namespace App\Creational\ProtoType;

abstract class AbstractCarProtoType
{
    protected string $model;

    private string $flag;


    abstract function __clone();


    /**
     * @return mixed
     */
    public function getFlag() : string
    {
        return $this->flag;
    }

    /**
     * @param mixed $flag
     */
    public function setFlag(string $flag): void
    {
        $this->flag = $flag;
    }
}