<?php

use Anhduc\DesignPattern\AbstractFactoryPattern\Abstract\PictureAbstractFactory;
use Anhduc\DesignPattern\AbstractFactoryPattern\interface\AbstractFactory;
use Anhduc\DesignPattern\AbstractFactoryPatternSkill\abstract\SkillFactory;
use Anhduc\DesignPattern\AbstractFactoryPatternSkill\DucSkillFactory;
use Anhduc\DesignPattern\BuilderPattern\CarDirector;
use Anhduc\DesignPattern\FactoryMethod\ShapeFactory;

require 'vendor/autoload.php';
include 'src/FactoryMethod/ShapeFactory.php';

function factoryMethod()
{
    echo "Factory method: " . PHP_EOL;
    $factory = new ShapeFactory();
    $circleShape = $factory->getShape(2);
    $circleShape->display();
}

//factoryMethod();


//GreenSquareAbstractFactory(new \Anhduc\DesignPattern\AbstractFactoryPattern\Picture1Factory());

function clientGetDamageFirstSkill(SkillFactory $skillFactory)
{
    return $skillFactory->secondSkill();
}

$abstractFactory = clientGetDamageFirstSkill(new DucSkillFactory());
//print_r($abstractFactory->getDamage()) ;
//var_dump(clientGetDamageFirstSkill(new DucSkillFactory()));

function clientCodeAbstrackFactoyPattern(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB() . "\n";
    echo $productB->anotherUsefulFunctionB($productA) . "\n";
}

echo "Client: Testing client code with the first factory type:\n";
clientCodeAbstrackFactoyPattern(new \Anhduc\DesignPattern\AbstractFactoryPattern\ConcreteFactory1());
echo PHP_EOL;
echo "Client: Testing the same client code with the second factory type:\n";
clientCodeAbstrackFactoyPattern(new \Anhduc\DesignPattern\AbstractFactoryPattern\ConcreteFactory2());

//$director = new CarDirector();
//$sportsCar = $director->buildSportsCar();
//$suv = $director->buildSUV();
//echo $sportsCar->getDescription() . "\n";
//echo $suv->getDescription() . "\n";

//$waiter = new \Anhduc\DesignPattern\BuilderPatternPizza\Waiter();
//$pizzaBuilder = new \Anhduc\DesignPattern\BuilderPatternPizza\DucPizzaBuilder();
//$waiter->setPizzaBuilder($pizzaBuilder);
//$waiter->constructPizza();
//$pizza = $waiter->getPizza();

//$singletonInstance = \Anhduc\DesignPattern\Singleton\Singleton::getInstance();
//var_dump($singletonInstance);