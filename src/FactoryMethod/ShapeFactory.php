<?php

namespace Anhduc\DesignPattern\FactoryMethod;

use Anhduc\DesignPattern\FactoryMethod\interface\Shape;

class ShapeFactory
{
    public function getShape($shapeType): Circle|Square|Rectangle|null
    {
        if ($shapeType == Shape::CIRCLE) {
            return new Circle();
        } else if ($shapeType == Shape::SQUARE) {
            return new Square();
        } else if ($shapeType == Shape::RECTANGLE) {
            return new Rectangle();
        }
        return null;
    }
}