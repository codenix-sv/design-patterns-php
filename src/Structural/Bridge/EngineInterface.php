<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Bridge;

/**
 * Interface EngineInterface
 * @package codenixsv\Patterns\Structural\Bridge
 */
interface EngineInterface
{
    /**
     * @return string
     */
    public function getEngineType(): string;
}
