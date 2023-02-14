<?php

namespace Anhduc\DesignPattern\FactoryMethod\interface;
interface Shape
{
    const CIRCLE = 1;
    const SQUARE = 2;
    const RECTANGLE = 3;
    function display();
}