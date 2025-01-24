<?php

namespace App\Structural\Facade\ConvertorLib;

class GifConvertor
{

    private Animator $animator;

    public function __construct(Animator $animator)
    {
        $this->animator = $animator;
    }

    public function convertToGif(Photo $photo): Photo
    {
        $type = '.gif';
        $photo->setType($type . $this->animator->animatePhoto($photo));
        return $photo;
    }

}