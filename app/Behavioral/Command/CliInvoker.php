<?php

namespace App\Behavioral\Command;

class CliInvoker
{

    private Command $command;
    public function setCommand(Command $command): void
    {
        $this->command = $command;

    }

    public function run()
    {

         $this->command->execute();

    }

}