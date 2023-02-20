<?php
namespace Anhduc\DesignPattern\FactoryMethod;

class ConcreteCreator1 extends Creater {

    public function factoryMethod()
    {
        return new ConcreteProduct1();
    }
}

