<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\ChainOfResponsibility;

/**
 * Class ElasticSearchStorage
 * @package codenixsv\Patterns\Behavioral\ChainOfResponsibility
 */
class ElasticSearchStorage extends AbstractStorage
{
    /**
     * @param int $id
     * @return string
     */
    public function findProductById(int $id): string
    {
        return 'Product from ElasticSearch';
    }
}
