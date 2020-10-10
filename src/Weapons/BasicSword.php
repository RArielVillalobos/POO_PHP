<?php

namespace Styde\Weapons;
use Styde\Weapon;
use Styde\Unit;
class BasicSword extends Weapon
{

    protected $damage = 20;


    public function getDescription(Unit $attacker,Unit $victim)
    {
        // TODO: Implement getDescription() method.
        return "{$attacker->getName()} ataca a {$victim->getName()}";
    }
}