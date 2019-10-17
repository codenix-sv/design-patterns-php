<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Bridge;

/**
 * Interface VehicleInterface
 * @package codenixsv\Patterns\Structural\Bridge
 */
interface VehicleInterface
{
    /**
     * VehicleInterface constructor.
     * @param EngineInterface $engine
     */
    public function __construct(EngineInterface $engine);

    /**
     * @return string
     */
    public function getDescription(): string;
}
