<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Proxy;

/**
 * Class CachedProductStorage
 * @package codenixsv\Patterns\Structural\Proxy
 */
class CachedProductStorage implements ProductStorageInterface
{
    /**
     * @var ProductStorageInterface
     */
    private $storage;

    /**
     * @var array
     */
    private $cache;

    /**
     * CachedProductStorage constructor.
     * @param ProductStorageInterface $storage
     */
    public function __construct(ProductStorageInterface $storage)
    {
        $this->storage = $storage;
        $this->cache = [];
    }


    /**
     * @param int $id
     * @return string
     */
    public function getFromId(int $id): string
    {
        if (key_exists($id, $this->cache)) {
            return $this->cache[$id] . '. From cache';
        }

        $data = $this->storage->getFromId($id);
        $this->cache[$id] = $data;

        return $data;
    }
}
