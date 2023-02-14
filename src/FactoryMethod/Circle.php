<?php

namespace Anhduc\DesignPattern\FactoryMethod;

use Anhduc\DesignPattern\FactoryMethod\interface\Shape;

class Circle implements Shape
{
    /**
     * @return void
     */
    function display()
    {
        echo "Circle";
    }
}