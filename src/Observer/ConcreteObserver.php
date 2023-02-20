<?php

namespace Anhduc\DesignPattern\Observer;

/**
 * Class ConcreteObserver
 * @package Anhduc\DesignPattern\Observer
 */
class ConcreteObserver implements Observer
{
    private Subject $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        echo 'The subject has updated its state to: ' . $this->subject->getState();
    }
}