<?php

namespace App\Behavioral\ChainOfResponsibility;

abstract class AbstractHandler implements HandlerInterface
{

    private ?HandlerInterface $nextHandler = null;
    public function setNext(?HandlerInterface $handler): HandlerInterface|null
    {
       $this->nextHandler = $handler;
       return $handler;
    }

    public function handle(Request $request): HandlerInterface|Request
    {
        if($this->nextHandler != null){
            return $this->nextHandler->handle($request);
        }

        return $request;

    }


}