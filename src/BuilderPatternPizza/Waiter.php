<?php

namespace Anhduc\DesignPattern\BuilderPatternPizza;

class Waiter
{
    private $pizzaBuilder;

    /**
     * @return mixed
     */
    public function getPizzaBuilder()
    {
        return $this->pizzaBuilder;
    }

    /**
     * @param mixed $pizzaBuilder
     */
    public function setPizzaBuilder($pizzaBuilder): void
    {
        $this->pizzaBuilder = $pizzaBuilder;
    }

    public function constructPizza()
    {
        $this->pizzaBuilder->createPizza();
        $this->pizzaBuilder->buildDough();
        $this->pizzaBuilder->buildSauce();
        $this->pizzaBuilder->buildToppings();
    }

    public function getPizza()
    {
    }

}