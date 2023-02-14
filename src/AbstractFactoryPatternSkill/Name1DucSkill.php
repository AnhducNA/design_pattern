<?php

namespace Anhduc\DesignPattern\AbstractFactoryPatternSkill;

class Name1DucSkill
{
    private $damage;
    private $aoe;

    public function __construct()
    {
        $this->damage = 100;
        $this->aoe = 100;
    }

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * @return int
     */
    public function getAoe(): int
    {
        return $this->aoe;
    }


}