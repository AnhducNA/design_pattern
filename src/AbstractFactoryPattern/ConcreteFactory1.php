<?php
namespace Anhduc\DesignPattern\AbstractFactoryPattern;

use Anhduc\DesignPattern\AbstractFactoryPattern\interface\AbstractFactory;

class ConcreteFactory1 implements AbstractFactory
{

    public function createProductA()
    {
        return new ConcreteProductA1();
    }

    public function createProductB()
    {
        return new ConcreteProductB1();
    }
}