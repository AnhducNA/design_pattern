<?php

namespace Anhduc\DesignPattern\FactoryMethodShape;

use Anhduc\DesignPattern\FactoryMethodShape\interface\Shape;

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