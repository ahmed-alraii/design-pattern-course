<?php

namespace App\Creational\ProtoType;

class AutomaticCarProtoType extends AbstractCarProtoType
{

    protected string $model = "Automatic";

    public function __clone()
    {

    }
}