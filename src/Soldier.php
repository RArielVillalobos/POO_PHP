<?php
namespace Styde;

class Soldier extends Unit{
    protected $damage = 40;

    public function attack(Unit $opponent){
        echo "<p>{$this->name} ataca a {$opponent->getName()} en dos</p>";
        $opponent->takeDamage($this->damage);
    }




}