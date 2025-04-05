<?php

namespace App\Behavioral\Command;

class GitReceiver
{

    private array $gitLog = [];

    public function getGitLog() : array
    {
        return $this->gitLog;
    }

    public function gitCommit(): void
    {
        $this->gitLog[] = 'Git - Commit';

    }

    public function gitAdd(): void
    {
        $this->gitLog[] = 'Git - Add';
    }

    public function gitPush(): void
    {
        $this->gitLog[] = 'Git - Push';
    }

    public function gitRevert(): void
    {
        $this->gitLog = ['Git - Revert'];
    }

}