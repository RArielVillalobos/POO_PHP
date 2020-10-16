<?php
namespace Styde;
use Exception;
use Styde\Armors\MissingArmor;

class Unit {
    const MAX_DAMAGE = 2300;
    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $damage;
    protected $weapon;



    public function __construct($name,Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new MissingArmor();



    }
    //metodo factory
    //lo hacemos estatico para no tener que instanciar la clase unit
    public static function createSoldier(){
        $soldier = new Unit("soldier",new Weapons\BasicBow);
        $soldier->setArmor(new Armors\BronzeArmor());
        return $soldier;

    }
    public function getName(){
        return $this->name;
    }
    public function getHp(){
        return $this->hp;
    }
    public function setArmor(Armor $armor = null){
        $this->armor = $armor;
        return $this;
    }
    public function setWeapon(Weapon $weapon){
        $this->weapon = $weapon;
        return $this;
    }
    public function setShield(){
        return $this;
    }

    public function move($direction){
        log::info("{$this->name} camina hacia $direction");
    }

    public function attack(Unit $opponent){
        $attack = $this->weapon->createAttack();

        log::info($attack->getDescription($this,$opponent));
        $opponent->takeDamage($attack);
    }
    public function takeDamage(Attack $attack){

        $this->setHp(
            $this->armor->absorbDamage($attack)
        );
        log::info("{$this->name} ahora tiene {$this->getHp()} puntos de vida  ");

        if($this->hp <= 0){
            $this->die();
        }
    }
    protected function setHp($damage){
        if($damage > static::MAX_DAMAGE){
            $damage = static::MAX_DAMAGE;
        }
        $this->hp=$this->hp - $damage;
    }
    public function die(){
        log::info("{$this->name} muere");
        exit();
    }



}
