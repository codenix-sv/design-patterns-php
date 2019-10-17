<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Bridge;

/**
 * Class DieselEngine
 * @package codenixsv\Patterns\Structural\Bridge
 */
class DieselEngine implements EngineInterface
{
    /**
     * @return string
     */
    public function getEngineType(): string
    {
        return 'diesel';
    }
}
