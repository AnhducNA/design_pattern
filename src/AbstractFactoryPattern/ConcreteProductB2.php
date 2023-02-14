<?php

namespace Anhduc\DesignPattern\AbstractFactoryPattern;

use Anhduc\DesignPattern\AbstractFactoryPattern\interface\AbstractProductA;
use Anhduc\DesignPattern\AbstractFactoryPattern\interface\AbstractProductB;

class ConcreteProductB2 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B2.";
    }

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();
        return "The result of the B2 collaborating with the ({$result})";
    }
}