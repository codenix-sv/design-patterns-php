<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Proxy;

/**
 * Class ProductManager
 * @package codenixsv\Patterns\Structural\Proxy
 */
class ProductManager
{
    /**
     * @var ProductStorageInterface
     */
    private $storage;

    /**
     * ProductManager constructor.
     * @param ProductStorageInterface $storage
     */
    public function __construct(ProductStorageInterface $storage)
    {
        $this->storage = $storage;
    }

    /**
     * @param $id
     * @return string
     */
    public function getProduct($id): string
    {
        return $this->storage->getFromId($id);
    }
}
