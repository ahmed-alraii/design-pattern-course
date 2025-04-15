<?php

namespace Tests;

use App\Behavioral\Mediator\LeftRoad;
use App\Behavioral\Mediator\RightRoad;
use App\Behavioral\Mediator\Road;
use App\Behavioral\Mediator\TrafficLightMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{


    private $trafficLightMediator;
    private RightRoad $rightRoad;

    private LeftRoad $leftRoad;

    protected function setUp(): void
    {
       parent::setUp();
       $this->rightRoad = new RightRoad();
       $this->leftRoad = new LeftRoad();
       $this->trafficLightMediator = new TrafficLightMediator($this->rightRoad , $this->leftRoad);

    }

    public function test_can_move_right_road_based_on_left_road()
    {
        $this->trafficLightMediator->action($this->leftRoad , Road::STOP_EVENT);
        $this->assertEquals('Move' , $this->rightRoad->getRoadStatus());

    }

    public function test_can_stop_right_road_based_on_left_road()
    {
        $this->trafficLightMediator->action($this->leftRoad , Road::MOVE_EVENS);
        $this->assertEquals('Stop' , $this->rightRoad->getRoadStatus());

    }


    public function test_can_move_left_road_based_on_right_road()
    {
        $this->trafficLightMediator->action($this->rightRoad , Road::STOP_EVENT);
        $this->assertEquals('Move' , $this->leftRoad->getRoadStatus());

    }

    public function test_can_stop_left_road_based_on_right_road()
    {
        $this->trafficLightMediator->action($this->rightRoad , Road::MOVE_EVENS);
        $this->assertEquals('Stop' , $this->leftRoad->getRoadStatus());

    }
}