<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Structural\Bridge;

use codenixsv\Patterns\Structural\Bridge\Bus;
use codenixsv\Patterns\Structural\Bridge\Car;
use codenixsv\Patterns\Structural\Bridge\DieselEngine;
use codenixsv\Patterns\Structural\Bridge\PetrolEngine;
use PHPUnit\Framework\TestCase;

/**
 * Class BridgeTest
 * @package codenixsv\Patterns\tests\Structural\Bridge
 */
class BridgeTest extends TestCase
{
    public function testCreateCarWithDieselEngine()
    {
        $engine = new DieselEngine();
        $car = new Car($engine);

        $this->assertEquals('Car with diesel engine', $car->getDescription());
    }

    public function testCreateCarWithPetrolEngine()
    {
        $engine = new PetrolEngine();
        $car = new Car($engine);

        $this->assertEquals('Car with petrol engine', $car->getDescription());
    }

    public function testCreateBusWithPetrolEngine()
    {
        $engine = new PetrolEngine();
        $bus = new Bus($engine);

        $this->assertEquals('Bus with petrol engine', $bus->getDescription());
    }

    public function testCreateBusWithDieselEngine()
    {
        $engine = new DieselEngine();
        $bus = new Bus($engine);

        $this->assertEquals('Bus with diesel engine', $bus->getDescription());
    }
}
