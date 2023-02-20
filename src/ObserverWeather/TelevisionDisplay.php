<?php

namespace Anhduc\DesignPattern\ObserverWeather;
/**
 * Class PhoneDisplay
 * @package Anhduc\DesignPattern\ObserverWeather
 */
class TelevisionDisplay implements Observer
{
    public function update($subject)
    {
        $temperature = $subject->getTemperature();
        echo "Nhiệt độ là $temperature độ. (Television Display)\n";
    }
}