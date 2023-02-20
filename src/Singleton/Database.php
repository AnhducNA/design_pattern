<?php

namespace Anhduc\DesignPattern\Singleton;

/**
 * Class Database
 * @package Anhduc\DesignPattern\Singleton
 */
class Database
{
    public static $singletonObject;
    public $record;
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->record = 0;
    }

    public function getName()
    {
        return $this->name;
    }

    public function editRecord($operation): string
    {
        return "Performing a " . $operation .
            " operation on record " . $this->record .
            " in database " . $this->name;
    }
    public static function getInstance($name)
    {
        if (self::$singletonObject == null) {
            self::$singletonObject = new Database($name);
        }
        return self::$singletonObject;
    }
}

