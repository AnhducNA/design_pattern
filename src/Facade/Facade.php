<?php

namespace Anhduc\DesignPattern\Facade;

class Facade {
    protected $subSystem1;
    protected $subSystem2;

    /**
     * Facade constructor.
     *
     * @param SubSystem1|null $subSystem1
     * @param SubSystem2|null $subSystem2
     */
    public function __construct(
        SubSystem1 $subSystem1 = null,
        SubSystem2 $subSystem2 = null
    )
    {
        $this->subSystem1 = $subSystem1 ?: new SubSystem1();
        $this->subSystem2 = $subSystem2 ?: new SubSystem2();
    }

    /**
     * operation
     *
     * @return string
     */
    public function operation()
    {
        $result = "Facade initializes subsystems:\n";
        $result .= $this->subSystem1->operation1();
        $result .= $this->subSystem2->operation1();
        $result .= "Facade orders subsystems to perform the action:\n";
        $result .= $this->subSystem1->operationN();
        $result .= $this->subSystem2->operationZ();
        return $result;
    }
}

