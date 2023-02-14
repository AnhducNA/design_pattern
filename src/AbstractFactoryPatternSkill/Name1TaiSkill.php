<?php

namespace Anhduc\DesignPattern\AbstractFactoryPatternSkill;

class Name1TaiSkill
{
    private int $damage;
    private int $aoe;

    /**
     * @param int $damage
     * @param int $aoe
     */
    public function __construct()
    {
        $this->damage = 100;
        $this->aoe = 200;
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