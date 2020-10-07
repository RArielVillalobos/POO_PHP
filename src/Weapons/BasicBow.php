<?php

namespace Styde\Weapons;
use Styde\Unit;
use Styde\Weapon;

class BasicBow extends Bow
{

    protected $damage = 20;

    public function getDescription(Unit $attacker,Unit $victim)
    {
        // TODO: Implement getDescription() method.
        return "{$attacker->getName()} dispara una flecha {$victim->getName()}";
    }

}