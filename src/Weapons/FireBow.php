<?php


namespace Styde\Weapons;


use Styde\Weapon;

class FireBow extends Weapon
{
    protected $damage = 30;
    protected $magical = true;


    public function createAttack()
    {
        return new FireArrowAttack;
    }
}