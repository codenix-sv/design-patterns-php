<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Adapter;

/**
 * Interface PaymentSystemInterface
 * @package codenixsv\Patterns\Structural\Adapter
 */
interface PaymentSystemInterface
{
    /**
     * @param int $amount
     * @return string
     */
    public function pay(int $amount): string;
}
