<?php

namespace Anhduc\DesignPattern\AbstractFactoryPattern\interface;

interface AbstractProductB
{
    public function usefulFunctionB(): string;

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}