<?php

namespace App\Behavioral\ChainOfResponsibility;

use Override;

class EmployeeThreeHandler extends AbstractHandler
{
    #[Override]
    public function handle(Request $request): HandlerInterface|Request
    {
        if($request->getId() % 7 == 0){
            $request->setDone(true);
            $request->setHandler(self::class);
            return $request;
        }
        return parent::handle($request);
    }
}