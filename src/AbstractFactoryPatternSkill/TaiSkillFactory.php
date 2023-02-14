<?php

namespace Anhduc\DesignPattern\AbstractFactoryPatternSkill;

class TaiSkillFactory extends abstract\SkillFactory
{

    public function firstSkill()
    {
        return new Name1TaiSkill();
    }

    public function secondSkill()
    {
        return new Name2TaiSkill();
    }
}