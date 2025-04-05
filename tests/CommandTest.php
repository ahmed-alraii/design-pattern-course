<?php

namespace Tests;

use App\Behavioral\Command\CliInvoker;
use App\Behavioral\Command\DeployCommand;
use App\Behavioral\Command\GitReceiver;
use App\Behavioral\Command\RevertCommand;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{

    private CliInvoker $cliInvoker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->cliInvoker = new CliInvoker();
    }

    public function test_can_execute_deploy_command()
    {

        // Arrange
        $receiver = new GitReceiver();
        $command = new DeployCommand($receiver);
        $this->cliInvoker->setCommand($command);

        // Act
        $this->cliInvoker->run();

        // Assert
        $this->assertCount(3 , $receiver->getGitLog());
        $this->assertEquals([
            'Git - Add',
            'Git - Commit',
            'Git - Push'
        ] , $receiver->getGitLog());

    }

    public function test_can_execute_revert_command()
    {
        // Arrange
        $receiver = new GitReceiver();
        $deployCommand = new DeployCommand($receiver);
        $revertCommand = new RevertCommand($receiver);
        $this->cliInvoker->setCommand($deployCommand);
        $this->cliInvoker->run();
        $this->cliInvoker->setCommand($revertCommand);

        // Act
        $this->cliInvoker->run();

        // Assert
        $this->assertCount(1 , $receiver->getGitLog());
        $this->assertEquals(['Git - Revert'] , $receiver->getGitLog());


    }
}