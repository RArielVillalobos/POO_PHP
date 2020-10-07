<?php


namespace Styde;

abstract class Weapon
{

    protected $damage = 0;

    public function getDamage(){
        return $this->damage;
    }
}