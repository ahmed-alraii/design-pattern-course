<?php

namespace App\Behavioral\Mediator;

abstract class Road
{

    private string $roadStatus = '';
   public const string STOP_EVENT = 'Stop';

   public const string MOVE_EVENS = 'Move';

    private MediatorInterface $mediator;

    public function __construct()
    {
    }

    public function setMediator(MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }

    public function move(): void
    {

        $this->roadStatus = self::MOVE_EVENS;
    }


    public function stop(): void
    {
          $this->roadStatus = self::STOP_EVENT;
    }


    public function getRoadStatus(): string
    {
        return $this->roadStatus;
    }
    abstract function getId(): string;

    public function getMediator(): MediatorInterface
    {
        return $this->mediator;
    }


}