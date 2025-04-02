<?php

namespace App\Behavioral\ChainOfResponsibility;

use Override;

class EmployeeOneHandler  extends AbstractHandler
{


    #[Override]
    public function handle(Request $request): HandlerInterface|Request
    {

        if($request->getId() % 2 === 0){
           $request->setDone(true);
           $request->setHandler(self::class);
           return $request;
        }

        return parent::handle($request);


    }

}