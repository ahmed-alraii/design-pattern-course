<?php

namespace App\Behavioral\Mediator;

class TrafficLightMediator implements MediatorInterface
{

    private Road $rightRoad;
    private Road $leftRoad;

    public function __construct(Road $rightRoad , Road $leftRoad)
    {
        $this->rightRoad = $rightRoad;
        $this->rightRoad->setMediator($this);
        $this->leftRoad = $leftRoad;
        $this->leftRoad->setMediator($this);
    }

    public function action(Road $road, string $event)
    {
        if($road->getId() === 'Left'){

            if($event === Road::MOVE_EVENS){

                $this->rightRoad->stop();
            }else{
                $this->rightRoad->move();
            }
        }

        if($road->getId() === 'Right'){

            if($event === Road::MOVE_EVENS){

                $this->leftRoad->stop();
            }else{
                $this->leftRoad->move();
            }
        }

    }
}