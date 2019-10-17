<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Bridge;

/**
 * Class PetrolEngine
 * @package codenixsv\Patterns\Structural\Bridge
 */
class PetrolEngine implements EngineInterface
{
    /**
     * @return string
     */
    public function getEngineType(): string
    {
        return 'petrol';
    }
}
