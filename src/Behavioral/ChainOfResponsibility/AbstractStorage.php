<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\ChainOfResponsibility;

/**
 * Class AbstractStorage
 * @package codenixsv\Patterns\Behavioral\ChainOfResponsibility
 */
abstract class AbstractStorage implements Storage
{
    /**
     * @var AbstractStorage|null
     */
    protected $successor;

    /**
     * @var bool
     */
    protected $isAvailable = false;

    /**
     * @param bool $isAvailable
     */
    public function setIsAvailable(bool $isAvailable): void
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @param AbstractStorage $storage
     */
    public function setNext(AbstractStorage $storage)
    {
        $this->successor = $storage;
    }

    /**
     * @param int $id
     * @return string
     */
    abstract protected function findProductById(int $id): string ;

    /**
     * @return bool
     */
    protected function isAvailable(): bool
    {
        return $this->isAvailable;
    }

    /**
     * @param int $id
     * @return string
     * @throws \Exception
     */
    public function find(int $id): string
    {
        if ($this->isAvailable()) {
            return $this->findProductById($id);
        }

        if ($this->successor) {
            return $this->successor->find($id);
        }

        throw new \Exception('Product not found');
    }
}
