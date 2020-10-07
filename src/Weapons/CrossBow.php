<?php

namespace Styde\Weapons;
use Styde\Weapon;
use Styde\Unit;
class CrossBow extends Bow
{

    protected $damage = 40;

    public function getDescription(Unit $attacker,Unit $victim)
    {
        // TODO: Implement getDescription() method.
        return "{$attacker->getName()} ataca a {$victim->getName()}";
    }
}