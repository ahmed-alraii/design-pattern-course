<?php

namespace App\Behavioral\Memento;

class CodeFile
{


    private array $lines = [];

    public function __construct()
    {
        $this->lines[] = "<?php";
    }

    public function getLines(): array
    {
        return $this->lines;
    }

    public function addNewLine(string $line): void
    {
        $this->lines[] = $line;
    }


}