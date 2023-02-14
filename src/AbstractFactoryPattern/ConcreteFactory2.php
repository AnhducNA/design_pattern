<?php

namespace Anhduc\DesignPattern\AbstractFactoryPattern;

use Anhduc\DesignPattern\AbstractFactoryPattern\interface\AbstractFactory;

class ConcreteFactory2 implements AbstractFactory
{

    public function createProductA()
    {
        return new ConcreteProductA2();
    }

    public function createProductB()
    {
        return new ConcreteProductB2();
    }
}