<?php

use Anhduc\DesignPattern\Singleton\Database;

require 'vendor/autoload.php';


//function clientAbstractFactorySkillGetDamageFirstSkill(\Anhduc\DesignPattern\AbstractFactoryPatternSkill\abstract\SkillFactory $skillFactory)
//{
//    echo "Abstract Factory method: " . PHP_EOL;
//    return $skillFactory->secondSkill();
//}
//
//$abstractFactory = clientAbstractFactorySkillGetDamageFirstSkill(new \Anhduc\DesignPattern\AbstractFactoryPatternSkill\DucSkillFactory());
//print_r($abstractFactory->getDamage()) ;


//function factoryMethod()
//{
//    echo "Factory method: " . PHP_EOL;
//    $newConcrete1 = new ConcreteCreator1();
//    var_dump($newConcrete1->someOperation());
//}
//
//factoryMethod();

//function factoryMethodShape(){
//    echo "Factory method Shape: " . PHP_EOL;
//    $rectangle = new \Anhduc\DesignPattern\FactoryMethodShape\ShapeFactory();
//    $rectangle->getShape("square")->display();
//}
//factoryMethodShape();

//function singleton()
//{
//    echo "Singleton: " . PHP_EOL;
//    $database = Database::getInstance("product");
//    $database = Database::getInstance("Employees");
//    var_dump($database->getName()); //products
//}
//singleton();

//function facade(\Anhduc\DesignPattern\Facade\Facade $facade)
//{
//    print($facade->operation());
//}
//
//$subSystem1 = new \Anhduc\DesignPattern\Facade\SubSystem1();
//$subSystem2 = new \Anhduc\DesignPattern\Facade\SubSystem2();
//$facade = new \Anhduc\DesignPattern\Facade\Facade($subSystem1, $subSystem2);
//facade($facade);

//GreenSquareAbstractFactory(new \Anhduc\DesignPattern\AbstractFactoryPattern\Picture1Factory());

//function clientCodeAbstrackFactoyPattern(AbstractFactory $factory)
//{
//    $productA = $factory->createProductA();
//    $productB = $factory->createProductB();
//
//    echo $productB->usefulFunctionB() . "\n";
//    echo $productB->anotherUsefulFunctionB($productA) . "\n";
//}
//
//echo "Client: Testing client code with the first factory type:\n";
//clientCodeAbstrackFactoyPattern(new \Anhduc\DesignPattern\AbstractFactoryPattern\ConcreteFactory1());
//echo PHP_EOL;
//echo "Client: Testing the same client code with the second factory type:\n";
//clientCodeAbstrackFactoyPattern(new \Anhduc\DesignPattern\AbstractFactoryPattern\ConcreteFactory2());

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

// Observer pattern
//$subject = new \Anhduc\DesignPattern\Observer\Subject();
//$observer = new \Anhduc\DesignPattern\Observer\ConcreteObserver($subject);
//
//$subject->setState('ready');

// ObserverWeather pattern
function observerWeather_pattern(){
    $weatherStation = new \Anhduc\DesignPattern\ObserverWeather\WeatherStation();

    $phoneDisplay = new \Anhduc\DesignPattern\ObserverWeather\PhoneDisplay();
    $televisionDisplay = new \Anhduc\DesignPattern\ObserverWeather\TelevisionDisplay();

    $weatherStation->attach($phoneDisplay);

    $weatherStation->attach($televisionDisplay);
    $weatherStation->setTemperature(25);

    $weatherStation->detach($phoneDisplay);

    $weatherStation->setTemperature(30);
}
//observerWeather_pattern();