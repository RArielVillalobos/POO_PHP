<?php
namespace Styde;
require '../vendor/autoload.php';
Translator::set([
    'BasicBowAttack'=>':unit dispara una flecha a :opponent',
    'BasicSwordAttack' =>':unit ataca con la espalda a :opponent',
    'CrossBowAttack'=>':unit dispara una flecha a  :opponent',
    'FireBowAttack' =>':unit dispara una flecha de fuego a :opponent'
]);

//le decimos que queremos usar la armadura que esta bajo el namespace Styde\Armors, el syude no es necesario porque ya esta arriba de archivo
$soldier = new Unit("soldier",new Weapons\BasicBow);
$armor = new Armors\BronzeArmor();
$silverArmor = new Armors\SilverArmor();
$curserArmor = new Armors\CurserArmor();
$archer = new Unit("archer",new Weapons\CrossBow);
//$soldier->attack($archer);
$soldier->setArmor($silverArmor);
$soldier->attack($archer);
$archer->attack($soldier);
$soldier->attack($archer);


