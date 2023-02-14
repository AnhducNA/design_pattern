<?php

namespace Anhduc\DesignPattern\AbstractFactoryPattern;

use Anhduc\DesignPattern\AbstractFactoryPattern\interface\AbstractProductA;

class ConcreteProductA1 implements AbstractProductA
{

    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}