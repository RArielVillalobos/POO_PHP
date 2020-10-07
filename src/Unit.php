<?php
namespace Styde;
use mysql_xdevapi\Exception;

abstract class Unit {
    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $damage;
    protected $weapon;


    public function __construct($name,Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;


    }
    public function getName(){
        return $this->name;
    }
    public function getHp(){
        return $this->hp;
    }
    public function setArmor(Armor $armor = null){
        $this->armor = $armor;
    }
    public function setWeapon(Weapon $weapon){
        $this->weapon = $weapon;
    }

    public function move($direction){
        show("{$this->name} camina hacia $direction");
    }

    public function attack(Unit $opponent){
        if($this->weapon == null){
            throw new \Exception("The unit has no weapons");
        }
        show($this->weapon->getDescription($this,$opponent));
        $opponent->takeDamage($this->weapon->getDamage());
    }
    public function takeDamage($damage){
        $this->hp=$this->hp - $this->absorbDamage($damage);
        show("{$this->name} ahora tiene {$this->getHp()} puntos de vida  ");

        if($this->hp <= 0){
            $this->die();
        }
    }
    public function die(){
        show("{$this->name} muere");
        exit();
    }
    protected function absorbDamage($damage){
        if($this->armor){
            $damage = $this->armor->absorbDamage($damage);
        }
        return $damage;

    }


}
