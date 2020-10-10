<?php


namespace Styde;


class Attack
{
    protected $damage;
    protected $magical;
    protected $description;
    public function __construct($damage,$magical,$description)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->description = $description;
    }
    public function getDamage(){
        return $this->damage;
    }
    public function getDescription(Unit $attacker,Unit $opponent){
        return Translator::get($this->description,[
            'unit'=>$attacker->getName(),
            'opponent'=>$opponent->getName()
        ]);
    }
    public function isMagical(){
        return $this->magical;
    }

    public function isPhysical(){
        return !$this->isMagical();
    }
}