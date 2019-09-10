<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Creational\FactoryMethod;

use codenixsv\Patterns\Creational\FactoryMethod\BrickHouse;
use codenixsv\Patterns\Creational\FactoryMethod\BrickHouseFactory;
use codenixsv\Patterns\Creational\FactoryMethod\StickHouse;
use codenixsv\Patterns\Creational\FactoryMethod\StickHouseFactory;
use codenixsv\Patterns\Creational\FactoryMethod\StrawHouse;
use codenixsv\Patterns\Creational\FactoryMethod\StrawHouseFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryMethodTest
 * @package codenixsv\Patterns\tests\Creational\FactoryMethod
 */
class FactoryMethodTest extends TestCase
{
    public function testCanCreateBrickHouse()
    {
        $width = 200;
        $height = 100;

        $factory = new BrickHouseFactory();
        $house = $factory->makeHouse($width, $height);

        $this->assertInstanceOf(BrickHouse::class, $house);

        $this->assertEquals($height, $house->getHeight());
        $this->assertEquals($width, $house->getWidth());
    }

    public function testCanCreateStickHouse()
    {
        $width = 225;
        $height = 125;

        $factory = new StickHouseFactory();
        $house = $factory->makeHouse($width, $height);

        $this->assertInstanceOf(StickHouse::class, $house);

        $this->assertEquals($height, $house->getHeight());
        $this->assertEquals($width, $house->getWidth());
    }

    public function testCanCreateStrawHouse()
    {
        $width = 250;
        $height = 150;

        $factory = new StrawHouseFactory();
        $house = $factory->makeHouse($width, $height);

        $this->assertInstanceOf(StrawHouse::class, $house);

        $this->assertEquals($height, $house->getHeight());
        $this->assertEquals($width, $house->getWidth());
    }
}
