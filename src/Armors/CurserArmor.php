<?php

namespace Styde\Armors;
use Styde\Armor;
class CurserArmor implements Armor{
    public function absorbDamage($damage){
        return $damage * 2;
    }
}