<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Proxy;

/**
 * Interface ProductStorageInterface
 * @package codenixsv\Patterns\Structural\Proxy
 */
interface ProductStorageInterface
{
    /**
     * @param int $id
     * @return string
     */
    public function getFromId(int $id): string;
}
