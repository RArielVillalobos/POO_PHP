<?php


namespace Styde\Armors;


use Styde\Armor;
use Styde\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack){
        //devuele la cantidad de daño sin alterarlo
        return $attack->getDamage();
    }
}