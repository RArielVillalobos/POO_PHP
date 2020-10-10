<?php


namespace Styde;

abstract class Weapon
{

    protected $damage = 0;
    protected $magical = false;

    public function getDamage(){
        return $this->damage;
    }
    public function createAttack(){
        return new Attack($this->damage,$this->magical,$this->getDescriptionKey());
    }
    protected function getDescriptionKey(){
        //Elimina el namespace de la clase y devuelve ej BasicBowAttack
        return str_replace('Styde\Weapons\\','',get_class($this)).'Attack';

    }

}