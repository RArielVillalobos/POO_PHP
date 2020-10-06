<?php

namespace Styde;
use Warcraft\Armor;
class CurserArmor implements Armor{
    public function absorbDamage($damage){
        return $damage * 2;
    }
}