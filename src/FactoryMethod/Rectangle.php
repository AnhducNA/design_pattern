<?php

namespace Anhduc\DesignPattern\FactoryMethod;

use Anhduc\DesignPattern\FactoryMethod\interface\Shape;

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