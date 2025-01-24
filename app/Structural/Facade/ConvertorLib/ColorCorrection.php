<?php

namespace App\Structural\Facade\ConvertorLib;

class ColorCorrection
{

    public function correctColor(Photo $photo)
    {
        return $photo . '-color_correction';
    }

}