<?php

namespace App\Structural\Facade\ConvertorLib;

class Animator
{

    public function animatePhoto(Photo $photo): string
    {
        return  $photo . '-animate';
    }

}