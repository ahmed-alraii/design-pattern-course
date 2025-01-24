<?php

namespace Tests;

use App\Structural\Facade\ConvertorFacade;
use App\Structural\Facade\ConvertorLib\Photo;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{


    public function test_can_convert_photo_to_gif()
    {

        // Arrange
        $photo = new Photo();

        // Act
        $photo = ConvertorFacade::gifConvert($photo);

        // Assert
        $this->assertEquals('.gif-animate', $photo->getType());

    }

    public function test_can_convert_photo_to_jpg()
    {

        // Arrange
        $photo = new Photo();

        // Act
        $photo = ConvertorFacade::jpgConvertor($photo);

        // Assert

        $this->assertEquals('.jpg-color_correction' , $photo->getType());

    }

}