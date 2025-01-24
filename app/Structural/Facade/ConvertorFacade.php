<?php

namespace App\Structural\Facade;

use App\Structural\Facade\ConvertorLib\Animator;
use App\Structural\Facade\ConvertorLib\ColorCorrection;
use App\Structural\Facade\ConvertorLib\GifConvertor;
use App\Structural\Facade\ConvertorLib\JpgConvertor;
use App\Structural\Facade\ConvertorLib\Photo;

class ConvertorFacade
{

    public static function gifConvert(Photo $photo): Photo
    {
        $animator = new Animator();
        $gifConvertor = new GifConvertor($animator);
        return $gifConvertor->convertToGif($photo);
    }

    public static function jpgConvertor(Photo $photo): Photo
    {
        $colorCorrection = new ColorCorrection();
        $jpgConvertor = new JpgConvertor($colorCorrection);
        return $jpgConvertor->convertToJpg($photo);

    }

}