<?php
namespace Anhduc\DesignPattern\Facade;

class  SubSystem1{
    /**
     * operation1
     *
     * @return string
     */
    function operation1()
    {
        return "Subsystem1: Ready!\n";
    }

    /**
     * operationN
     *
     * @return string
     */
    function operation()
    {
        return "Subsystem1: Go!\n";
    }

    public function operationN()
    {
    }
}

