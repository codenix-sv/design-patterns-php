<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Bridge;

/**
 * Class Bus
 * @package codenixsv\Patterns\Structural\Bridge
 */
class Bus implements VehicleInterface
{
    /**
     * @var EngineInterface
     */
    private $engine;

    /**
     * VehicleInterface constructor.
     * @param EngineInterface $engine
     */
    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Bus with ' . $this->engine->getEngineType() . ' engine';
    }
}
