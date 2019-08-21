<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Creational\Builder;

use codenixsv\Patterns\Creational\Builder\Pizza;
use codenixsv\Patterns\Creational\Builder\PizzaBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Class BuilderTest
 * @package codenixsv\Patterns\tests\Creational\Builder
 */
class BuilderTest extends TestCase
{
    public function testCanBuildPizza()
    {
        $builder = new PizzaBuilder();
        $pizza = $builder->addAnchovy()->addPeperoni()->build();

        $this->assertInstanceOf(Pizza::class, $pizza);
    }
}
