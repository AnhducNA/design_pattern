<?php

namespace Anhduc\DesignPattern\ObserverWeather ;

class WeatherStation {
    private $observers = [];
    private $temperature;

    public function attach($observer) {
        $this->observers[] = $observer;
    }

    public function detach($observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function setTemperature($temperature) {
        $this->temperature = $temperature;
        $this->notify();
    }

    public function getTemperature() {
        return $this->temperature;
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

