<?php

namespace App\Structural\Facade\ConvertorLib;

class JpgConvertor
{

    private ColorCorrection $colorCorrection;

    public function __construct(ColorCorrection $colorCorrection)
    {
        $this->colorCorrection = $colorCorrection;
    }

    public function convertToJpg(Photo $photo): Photo
   {
       $type = ".jpg";
       $photo->setType($type . $this->colorCorrection->correctColor($photo));
       return $photo;
   }


}