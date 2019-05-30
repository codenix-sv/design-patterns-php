<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\ChainOfResponsibility;

/**
 * Class MySQLStorage
 * @package codenixsv\Patterns\Behavioral\ChainOfResponsibility
 */
class MySQLStorage extends AbstractStorage
{
    /**
     * @param int $id
     * @return string
     */
    public function findProductById(int $id): string
    {
        return 'Product from MySQL';
    }
}
