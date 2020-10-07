<?php
namespace Styde;
require '../vendor/autoload.php';
//le decimos que queremos usar la armadura que esta bajo el namespace Styde\Armors, el syude no es necesario porque ya esta arriba de archivo
$archer = new Archer("archer",new Weapons\BasicBow);
$armor = new Armors\BronzeArmor();
$silverArmor = new Armors\SilverArmor();
$curserArmor = new Armors\CurserArmor();
$soldier = new Soldier("soldier",new Weapons\CrossBow);
//$soldier->attack($archer);
$soldier->setArmor($curserArmor);
$soldier->attack($archer);
$archer->attack($soldier);


