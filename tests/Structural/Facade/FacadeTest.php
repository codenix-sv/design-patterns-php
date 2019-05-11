<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Structural\Facade;

use codenixsv\Patterns\Structural\Facade\Barista;
use codenixsv\Patterns\Structural\Facade\CoffeeGrinderInterface;
use codenixsv\Patterns\Structural\Facade\CoffeeMachineInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class FacadeTest
 * @package codenixsv\Patterns\tests\Structural\Facade
 */
class FacadeTest extends TestCase
{
    public function testMakeCoffee()
    {
        $coffeeGrinder = $this->createMock(CoffeeGrinderInterface::class);
        $coffeeMachine = $this->createMock(CoffeeMachineInterface::class);
        $barista = new Barista($coffeeGrinder, $coffeeMachine);

        $coffeeGrinder->expects($this->once())->method('load');
        $coffeeGrinder->expects($this->once())->method('grind');
        $coffeeMachine->expects($this->once())->method('load');
        $coffeeMachine->expects($this->once())->method('make');

        $barista->makeCoffee();
    }
}
