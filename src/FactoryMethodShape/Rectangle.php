<?php

namespace Anhduc\DesignPattern\FactoryMethodShape;

use Anhduc\DesignPattern\FactoryMethodShape\interface\Shape;

class Rectangle implements Shape
{
    /**
     * @return void
     */
    function display()
    {
        echo "Rectangle";
    }
}