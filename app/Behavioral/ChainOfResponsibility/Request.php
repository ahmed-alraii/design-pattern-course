<?php

namespace App\Behavioral\ChainOfResponsibility;

class Request
{

    private int $id = 0;

    private bool $done = false;

    private string $handler;


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function isDone(): bool
    {
        return $this->done;
    }

    public function setDone(bool $done): void
    {
        $this->done = $done;
    }


    public function setHandler(string $handler): void
    {
        $this->handler = $handler;
    }


    public function getHandler(): string
    {
        return $this->handler;
    }





}