<?php

namespace Styde\Weapons;
use Styde\Weapon;
use Styde\Unit;
class BasicSword extends Weapon
{

    protected $damage = 20;
    protected $description = ':unit ataca con la espalda a :opponent';

    public function getDescription(Unit $attacker,Unit $victim)
    {
        // TODO: Implement getDescription() method.
        return "{$attacker->getName()} ataca a {$victim->getName()}";
    }
}