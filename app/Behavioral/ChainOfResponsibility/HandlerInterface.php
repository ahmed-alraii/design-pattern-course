<?php

namespace App\Behavioral\ChainOfResponsibility;

interface HandlerInterface
{

    public function setNext(HandlerInterface $handler): HandlerInterface|null;
    public function handle(Request $request) : HandlerInterface|Request|null;

}