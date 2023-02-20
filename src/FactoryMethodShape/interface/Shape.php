<?php

namespace Anhduc\DesignPattern\FactoryMethodShape\interface;
interface Shape
{
    const CIRCLE = "circle";
    const SQUARE = "square";
    const RECTANGLE = "rectangle";
    function display();
}