<?php

namespace Anhduc\DesignPattern\BuilderPatternPizza\interface;

interface Pizzabuilder
{
public function createPizza();
public function buildDough();
public function buildSauce();
public function buildTopping();
public function getPizza();

}