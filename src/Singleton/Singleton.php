<?php

namespace Anhduc\DesignPattern\Singleton;

class Singleton {
    private static $instance;

    private function __construct() {
        // private constructor to prevent direct instantiation
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}