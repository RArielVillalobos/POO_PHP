<?php
function show($message){
    echo "<p>{$message}</p>";

}
abstract class Unit {
    protected $hp = 40;
    protected $name;


    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getHp(){
        return $this->hp;
    }

    public function move($direction){
        show("{$this->name} camina hacia $direction");
    }

    abstract  function attack(Unit $opponent);
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
        return $damage;

    }


}
interface Armor{
    public function absorbDamage($damage);
}
class BronzeArmor implements Armor {
    public function absorbDamage($damage){
        return $damage / 2;
    }
}
class SilverArmor implements Armor{
    public function absorbDamage($damage){
        return $damage / 3;
    }
}
class CurserArmor implements Armor{
    public function absorbDamage($damage){
        return $damage * 2;
    }
}
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
class Archer extends Unit{
    protected $damage = 40;

    public function attack(Unit $opponent){
        show("{$this->name} dispara una flecha a {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }

}
$archer = new Archer("archer");
$armor = new BronzeArmor();
$silverArmor = new SilverArmor();
$curserArmor = new CurserArmor();
$soldier = new Soldier("soldier");
//$soldier->attack($archer);
$soldier->setArmor($curserArmor);
$archer->attack($soldier);
$soldier->attack($archer);

