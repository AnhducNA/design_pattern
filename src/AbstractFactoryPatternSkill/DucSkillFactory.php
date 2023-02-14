<?php

namespace Anhduc\DesignPattern\AbstractFactoryPatternSkill;


class DucSkillFactory extends abstract\SkillFactory
{

    /**
     * @return Name1DucSkill
     */
    public function firstSkill(): Name1DucSkill
    {
        return new Name1DucSkill();
    }

    /**
     * @return Name2DucSkill
     */
    public function secondSkill(): Name2DucSkill
    {
        return new Name2DucSkill();
    }
}