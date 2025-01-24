<?php

namespace App\Structural\Facade\ConvertorLib;

class Photo
{

    private string $type = '';
    public function getType() : string
    {

      return  $this->type;

    }

    public function setType(string $type) : void
    {
        $this->type = $type;
    }

    public function __toString(): string
    {
        return $this->type;
    }

}