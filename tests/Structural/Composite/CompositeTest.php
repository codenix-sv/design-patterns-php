<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Structural\Composite;

use codenixsv\Patterns\Structural\Composite\DryContainer;
use codenixsv\Patterns\Structural\Composite\FlatRackContainer;
use codenixsv\Patterns\Structural\Composite\Freighter;
use codenixsv\Patterns\Structural\Composite\TunnelContainer;
use PHPUnit\Framework\TestCase;

/**
 * Class CompositeTest
 * @package codenixsv\Patterns\tests\Structural\Composite
 */
class CompositeTest extends TestCase
{
    /**
     * @param int $flatRackContainerCapacity
     * @param int $dryContainerCapacity
     * @param int $tunnelContainerCapacity
     *
     * @dataProvider loadCapacityProvider
     */
    public function testTotalCapacity(
        int $flatRackContainerCapacity,
        int $dryContainerCapacity,
        int $tunnelContainerCapacity
    ) {
        $freighter = new Freighter();

        $flatRackContainer = new FlatRackContainer($flatRackContainerCapacity);
        $dryContainer = new DryContainer($dryContainerCapacity);
        $tunnelContainer = new TunnelContainer($tunnelContainerCapacity);

        $freighter->addContainer($flatRackContainer);
        $freighter->addContainer($dryContainer);
        $freighter->addContainer($tunnelContainer);

        $expected = $flatRackContainerCapacity + $dryContainerCapacity + $tunnelContainerCapacity;

        $loadCapacity = $freighter->getLoadCapacity();

        $this->assertEquals($expected, $loadCapacity);
    }

    /**
     * @return array
     */
    public function loadCapacityProvider(): array
    {
        return [
            [110, 80, 30],
            [60, 115, 10],
            [15, 5, 100],
            [10, 125, 35]
        ];
    }
}
