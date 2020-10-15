<?php
namespace Styde;
require '../vendor/autoload.php';
Translator::set([
    'BasicBowAttack'=>':unit dispara una flecha a :opponent',
    'BasicSwordAttack' =>':unit ataca con la espalda a :opponent',
    'CrossBowAttack'=>':unit dispara una flecha a  :opponent',
    'FireBowAttack' =>':unit dispara una flecha de fuego a :opponent'
]);
$logger = new HtmlLogger();
log::setLogger($logger);
//constructor con un nombre
$soldier = Unit::createSoldier()
                ->setWeapon(new Weapons\BasicBow())
                ->setArmor(new Armors\SilverArmor());
$archer = new Unit("archer",new Weapons\CrossBow);
$soldier->attack($archer);
$archer->attack($soldier);
$soldier->attack($archer);


