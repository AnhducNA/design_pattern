<?php

namespace Anhduc\DesignPattern\AbstractFactoryPatternSkill;

class Name2TaiSkill
{
    private int $damage;
    private int $aoe;

    public function __construct()
    {
        $this->damage = 200;
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

    /**
     * @param int $aoe
     */


}