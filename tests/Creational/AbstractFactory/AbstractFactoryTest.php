<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Creational\AbstractFactory;

use codenixsv\Patterns\Creational\AbstractFactory\IronChair;
use codenixsv\Patterns\Creational\AbstractFactory\IronFurnitureFactory;
use codenixsv\Patterns\Creational\AbstractFactory\IronTable;
use codenixsv\Patterns\Creational\AbstractFactory\WoodenChair;
use codenixsv\Patterns\Creational\AbstractFactory\WoodenFurnitureFactory;
use codenixsv\Patterns\Creational\AbstractFactory\WoodenTable;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractFactoryTest
 * @package codenixsv\Patterns\tests\Creational\FactoryMethod
 */
class AbstractFactoryTest extends TestCase
{
    /**
     * @var string
     */
    private $chairColor = 'red';

    /**
     * @var int
     */
    private $tableWidth = 200;

    /**
     * @var int
     */
    private $tableHeight = 100;

    public function testCanCreateWoodenFurniture()
    {
        $factory = new WoodenFurnitureFactory();
        $material = 'wood';

        $chair = $factory->makeChair($this->chairColor, true);
        $table = $factory->makeTable($this->tableWidth, $this->tableHeight);

        $this->assertInstanceOf(WoodenChair::class, $chair);
        $this->assertEquals($this->chairColor, $chair->getColor());
        $this->assertEquals($material, $chair->getMaterial());

        $this->assertInstanceOf(WoodenTable::class, $table);
        $this->assertEquals($this->tableHeight, $table->getHeight());
        $this->assertEquals($this->tableWidth, $table->getWight());
    }

    public function testCanCreateIronFurniture()
    {
        $factory = new IronFurnitureFactory();
        $material = 'iron';

        $chair = $factory->makeChair($this->chairColor, true);
        $table = $factory->makeTable($this->tableWidth, $this->tableHeight);

        $this->assertInstanceOf(IronChair::class, $chair);
        $this->assertEquals($this->chairColor, $chair->getColor());
        $this->assertEquals($material, $chair->getMaterial());

        $this->assertInstanceOf(IronTable::class, $table);
        $this->assertEquals($this->tableHeight, $table->getHeight());
        $this->assertEquals($this->tableWidth, $table->getWight());
    }
}
