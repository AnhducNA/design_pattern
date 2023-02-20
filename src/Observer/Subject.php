<?php
namespace Anhduc\DesignPattern\Observer;

/**
 * Class Subject
 * @package Anhduc\DesignPattern\Observer
 */
class Subject{
    private $observers = array();
    private $state;

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function setState($state) {
        $this->state = $state;
        $this->notify();
    }

    public function getState() {
        return $this->state;
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}
