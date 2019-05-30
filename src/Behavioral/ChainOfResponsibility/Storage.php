<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\ChainOfResponsibility;

/**
 * Interface Storage
 * @package codenixsv\Patterns\Behavioral\ChainOfResponsibility
 */
interface Storage
{
    /**
     * @param int $id
     * @return string
     */
    public function find(int $id): string;
}
