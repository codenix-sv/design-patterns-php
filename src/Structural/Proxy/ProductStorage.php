<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Proxy;

/**
 * Class ProductStorage
 * @package codenixsv\Patterns\Structural\Proxy
 */
class ProductStorage implements ProductStorageInterface
{
    /**
     * @param int $id
     * @return string
     */
    public function getFromId(int $id): string
    {
        return 'Product data. Id: ' . (string)$id;
    }
}
