<?php

namespace App\Behavioral\ChainOfResponsibility;

use Override;

class EmployeeTwoHandler extends AbstractHandler
{


    #[Override]

    public function handle(Request $request): HandlerInterface|Request
    {
        if($request->getId() % 3 == 0){
            $request->setDone(true);
            $request->setHandler(self::class);
            return $request;
        }
        return parent::handle($request);
    }

}