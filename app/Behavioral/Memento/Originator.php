<?php

namespace App\Behavioral\Memento;

class Originator
{
   private CodeFile $codeFile;
    public function __construct()
    {
        $this->codeFile = new CodeFile();
    }

    public function addNewEcho(): void
    {
        $this->codeFile->addNewLine("Echo 'TEST New Line'; ");
    }

    public function addNewVariable(): void
    {
        $this->codeFile->addNewLine('$number = 15;');

    }

    public function save(): MementoInterface
    {
        return new ConcreteMemento(clone $this->codeFile);
    }

    public function restoreOrCtrlZ(MementoInterface $memento): CodeFile
    {
      return  $this->codeFile = $memento->getSnapShot();
    }

    public function getCodeFile(): CodeFile
    {
        return $this->codeFile;
    }

}