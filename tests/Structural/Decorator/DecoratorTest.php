<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Structural\Decorator;

use codenixsv\Patterns\Structural\Decorator\AvocadoBurger;
use codenixsv\Patterns\Structural\Decorator\Burger;
use codenixsv\Patterns\Structural\Decorator\BurgerInterface;
use codenixsv\Patterns\Structural\Decorator\CheeseBurger;
use codenixsv\Patterns\Structural\Decorator\SaladBurger;
use PHPUnit\Framework\TestCase;

/**
 * Class DecoratorTest
 * @package codenixsv\Patterns\tests\Structural\Decorator
 */
class DecoratorTest extends TestCase
{
    /**
     * @var BurgerInterface
     */
    private $burger;

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        $this->burger = new Burger();
    }

    public function testAvocadoBurgerDecorator()
    {
        $burger = new AvocadoBurger($this->burger);

        $this->assertEquals(8, $burger->getPrice());
        $this->assertEquals('Burger with avocado', $burger->getDescription());
    }

    public function testSaladBurgerDecorator()
    {
        $burger = new SaladBurger($this->burger);

        $this->assertEquals(6, $burger->getPrice());
        $this->assertEquals('Burger with salad', $burger->getDescription());
    }

    public function testCheeseBurgerDecorator()
    {
        $burger = new CheeseBurger($this->burger);

        $this->assertEquals(7, $burger->getPrice());
        $this->assertEquals('Burger with cheese', $burger->getDescription());
    }

    public function testAllKindsBurgerDecorator()
    {
        $burger = new AvocadoBurger($this->burger);
        $burger = new SaladBurger($burger);
        $burger = new CheeseBurger($burger);

        $this->assertEquals(11, $burger->getPrice());
        $this->assertEquals('Burger with avocado with salad with cheese', $burger->getDescription());
    }
}
