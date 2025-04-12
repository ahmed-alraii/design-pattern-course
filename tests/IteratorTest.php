<?php

namespace Tests;

use App\Behavioral\Iterator\City;
use App\Behavioral\Iterator\OmanCitiesCollection;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{


    public function test_can_use_odd_iterator()
    {
        $muscat = new City('Muscat' , 1000);
        $salalah = new City('Salalah' , 2000);
        $nizwa = new City('Nizwa' , 3000);
        $suhar = new City('Suhar' , 4000);

        $omanCollection = new OmanCitiesCollection();

        $omanCollection->addCity($muscat)
                       ->addCity($salalah)
                       ->addCity($nizwa)
                       ->addCity($suhar);

        $list = [];
        foreach ($omanCollection as $city){
            $list[] = $city->getName();
        }

        $this->assertEquals(['Salalah' , 'Suhar'] , $list);


    }

    public function test_can_use_even_iterator()
    {
        $muscat = new City('Muscat' , 1000);
        $salalah = new City('Salalah' , 2000);
        $nizwa = new City('Nizwa' , 3000);
        $suhar = new City('Suhar' , 4000);

        $omanCollection = new OmanCitiesCollection();

        $omanCollection->addCity($muscat)
            ->addCity($salalah)
            ->addCity($nizwa)
            ->addCity($suhar);

        $list = [];
        foreach ($omanCollection->getEvenIterator() as $city){
            $list[] = $city->getName();
        }

        $this->assertEquals(['Muscat' , 'Nizwa'] , $list);


    }

    public function test_can_use_area_iterator()
    {
        $muscat = new City('Muscat' , 1000);
        $salalah = new City('Salalah' , 2000);
        $nizwa = new City('Nizwa' , 3000);
        $suhar = new City('Suhar' , 4000);

        $omanCollection = new OmanCitiesCollection();

        $omanCollection->addCity($muscat)
            ->addCity($salalah)
            ->addCity($nizwa)
            ->addCity($suhar);

        $list = [];
        foreach ($omanCollection->getAreaIterator() as $city){
            $list[] = $city->getName();
        }

        $this->assertEquals(['Suhar' , 'Nizwa' , 'Salalah' , 'Muscat'] , $list);


    }

}