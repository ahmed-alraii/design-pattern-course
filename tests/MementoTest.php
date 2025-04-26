<?php

namespace Tests;

use App\Behavioral\Memento\CareTaker;
use App\Behavioral\Memento\Originator;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    private Originator $originator;
    private CareTaker $careTaker;
    protected function setUp(): void
    {

        $this->originator = new Originator();
        $this->careTaker = new CareTaker($this->originator);

    }


    public function test_can_save_code_file_updates()
    {

        // Arrange
        $this->originator->addNewEcho();
        $this->originator->addNewVariable();

        // Act
        $this->careTaker->commit();
        $codeFile = $this->originator->getCodeFile();

        // Assert
        $this->assertCount(3 , $codeFile->getLines());

    }


    public function test_can_restore_code_file()
    {
        // Arrange
        $this->originator->addNewEcho();
        $this->originator->addNewVariable();
        $this->careTaker->commit();
        $this->originator->addNewEcho();
        $this->originator->addNewEcho();

        // Act
        $this->careTaker->rollBack();
        $codeFile = $this->originator->getCodeFile();

        // Assert
        $this->assertCount(3 , $codeFile->getLines());

    }

}