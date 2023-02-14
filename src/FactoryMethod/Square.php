<?php

namespace Anhduc\DesignPattern\FactoryMethod;

use Anhduc\DesignPattern\FactoryMethod\interface\Shape;

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