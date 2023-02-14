<?php

namespace Anhduc\DesignPattern\BuilderPattern;

class CarBuilder
{
    private Car $car;

    public function __construct()
    {
        $this->car = new Car();
    }
    public function setModel($model): void
    {
        $this->car->setModel($model);
    }
    public function setYear($year): void
    {
        $this->car->setYear($year);
    }

    public function setEngine($engine): void
    {
        $this->car->setEngine($engine);
    }
    public function getCar(): Car
    {
        return $this->car;
    }
}