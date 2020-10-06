<?php
namespace Styde;
use Warcraft\Armor;
class Soldier extends Unit{
    protected $damage = 40;
    protected $armor;

    public function __construct($name)
    {
        parent::__construct($name);

    }
    public function setArmor(Armor $armor = null){
        $this->armor = $armor;
    }

    public function attack(Unit $opponent){
        echo "<p>{$this->name} ataca a {$opponent->getName()} en dos</p>";
        $opponent->takeDamage($this->damage);
    }

    protected function absorbDamage($damage){
        if($this->armor){
            $damage = $this->armor->absorbDamage($damage);
        }
        return $damage;

    }


}