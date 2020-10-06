<?php
namespace Styde;
require 'src/helpers.php';
require 'vendor/Armor.php';

//Autocarga de clases
spl_autoload_register(function ($className){
    //si al principio de la clase existe Styde
    if(strpos($className,'Styde\\') === 0){
        //remplazo syude por una cadena vacia
        $className = str_replace('Styde\\','',$className);
        if(file_exists("src/$className.php")){
            require "src/$className.php";
        }

    }

});


$archer = new Archer("archer");
$armor = new BronzeArmor();
$silverArmor = new SilverArmor();
$curserArmor = new CurserArmor();
$soldier = new Soldier("soldier");
//$soldier->attack($archer);
$soldier->setArmor($curserArmor);
$archer->attack($soldier);
$soldier->attack($archer);

