<?php
namespace Anhduc\DesignPattern\AbstractFactoryPattern\interface;
/**
 * Define specifies the methods for creating the related objects
 * Xác định các phương thức cụ thể để tạo đối tượng liên quan
 */
interface AbstractFactory
{
public function createProductA();
public function createProductB();

}