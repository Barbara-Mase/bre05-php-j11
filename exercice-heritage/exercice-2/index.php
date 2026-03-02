<?php


require 'Warrior.php';
require 'Mage.php'; 

$character = new Character();
$character-> setLife(5);
$character -> setName("John");

echo "{$character->introduce()}";


$warrior = new Warrior();
$warrior -> setLife(20);
$warrior -> setName("Clara");
$warrior -> setEnergy(30);
echo "{$warrior->introduce()} j'ai un niveau d'énergie de {$warrior->getEnergy()}";




// $warrior -> setEnegergy
// echo 


// $mage = new Mage();
// echo "{$mage->introduce()}";



