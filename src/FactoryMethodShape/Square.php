<?php

namespace Anhduc\DesignPattern\FactoryMethodShape;

use Anhduc\DesignPattern\FactoryMethodShape\interface\Shape;

class Square implements Shape
{
    /**
     * @return void
     */
    function display()
    {
        echo "Square";
    }
}