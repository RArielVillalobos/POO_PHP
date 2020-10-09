<?php


namespace Styde\Weapons;


use Styde\Weapon;

class FireBow extends Weapon
{
    protected $damage = 30;
    protected $magical = true;
    protected $description = ':unit dispara una flecha de fuego a :opponent';

    public function createAttack()
    {
        return new FireArrowAttack;
    }
}