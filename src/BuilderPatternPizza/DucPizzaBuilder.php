<?php

namespace Anhduc\DesignPattern\BuilderPatternPizza;

use Anhduc\DesignPattern\BuilderPatternPizza\interface\Pizzabuilder;

class DucPizzaBuilder implements Pizzabuilder
{
    private Pizza $pizza;

    public function createPizza()
    {
        $this->pizza = new Pizza();
    }

    public function buildDough()
    {
        $this->pizza->setDough('muoi-ot');
    }

    public function buildSauce()
    {
       $this->pizza->setSauce('nuoc-mam');
    }

    public function buildTopping()
    {
        $this->pizza->setTopping('hanh-kho');
        $this->pizza->setTopping('ruoc-bong');
    }

    public function getPizza(): Pizza
    {
        return $this->pizza;
    }
}