<?php

namespace Anhduc\DesignPattern\BuilderPattern;

class CarDirector
{
    public function buildSportsCar(): Car
    {
        $builder = new CarBuilder();
        $builder->setModel("Sports Car");
        $builder->setYear("2022");
        $builder->setEngine("V8");
        return $builder->getCar();
    }

    public function buildSUV(): Car
    {
        $builder = new CarBuilder();
        $builder->setModel("SUV");
        $builder->setYear("2022");
        $builder->setEngine("V6");
        return $builder->getCar();
    }
}