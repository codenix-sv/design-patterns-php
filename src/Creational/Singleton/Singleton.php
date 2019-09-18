<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\Singleton;

/**
 * Class Singleton
 * @package codenixsv\Patterns\Creational\Singleton
 */
final class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    /**
     * Clone magic method
     */
    private function __clone()
    {
    }

    /**
     * Wakeup magic method
     */
    private function __wakeup()
    {
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
