<?php

namespace Anhduc\DesignPattern\FactoryMethod;

/**
 * Class ConcreteProduct1
 * @package Anhduc\DesignPattern\FactoryMethod
 */

class ConcreteProduct1 implements Product{
    public function operation(): string
    {
        return "Kết quả ConcreteProduct1";
    }
}
