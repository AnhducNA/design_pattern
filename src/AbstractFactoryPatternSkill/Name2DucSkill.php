<?php

namespace Anhduc\DesignPattern\AbstractFactoryPatternSkill;

class Name2DucSkill
{
    private int $damage;
    private int $aoe;

    /**
     * @param int $damage
     * @param int $aoe
     */
    public function __construct()
    {
        $this->damage = 200;
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