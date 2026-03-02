<?php

//A faire corriger 

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
echo "{$warrior->introduce()} j'ai un niveau d'énergie de {$warrior->getEnergy()} <br>";


$mage = new Mage();
$mage -> setLife(15);
$mage -> setName("Lily");
$mage -> setMana(35);
echo "{$mage->introduce()} j'ai un nombre de point de vie de {$mage->getLife()} et un nombre de point de mana de {$mage->getMana()}";



