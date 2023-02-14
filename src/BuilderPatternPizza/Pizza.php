<?php

namespace Anhduc\DesignPattern\BuilderPatternPizza;

class Pizza
{
private string $dough;
private string $sauce;
private string $topping;

    /**
     * @return string
     */
    public function getDough(): string
    {
        return $this->dough;
    }

    /**
     * @param string $dough
     */
    public function setDough(string $dough): void
    {
        $this->dough = $dough;
    }

    /**
     * @return string
     */
    public function getSauce(): string
    {
        return $this->sauce;
    }

    /**
     * @param string $sauce
     */
    public function setSauce(string $sauce): void
    {
        $this->sauce = $sauce;
    }

    /**
     * @return string
     */
    public function getTopping(): string
    {
        return $this->topping;
    }

    /**
     * @param string $topping
     */
    public function setTopping(string $topping): void
    {
        $this->topping = $topping;
    }

}