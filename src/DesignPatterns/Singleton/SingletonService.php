<?php
namespace App\DesignPatterns\Singleton;

class SingletonService
{
    private static ?SingletonService $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
