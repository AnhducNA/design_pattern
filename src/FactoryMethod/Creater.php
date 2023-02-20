<?php

namespace Anhduc\DesignPattern\FactoryMethod;

abstract class Creater
{
    public abstract function factoryMethod();
    public function someOperation(): string
    {
        // Call the factory method to create a Product object.
        $product = $this->factoryMethod();
        // Now, use the product.
        $result = "Creator: Code của người tạo : " . $product->operation();
        return $result;
    }

}

