<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Adapter;

/**
 * Class WebMoney
 * @package codenixsv\Patterns\Structural\Adapter
 */
class WebMoney
{
    /**
     * @param int $amount
     * @return string
     */
    public function sendPayment(int $amount): string
    {
        return 'Paying via WebMoney. Amount: ' . (string)$amount;
    }
}
