<?php


//A faire corriger 
require_once "Character.php"; 

//La class Mage étend la classe Character : permet d'utiliser la classe Character ici
class Mage extends Character {
    
    public function __construct (private int $mana = 0) {
        //Attribut de la classe character initialisé
        $life = 0; 
        $name = "";
    }
    
    public function getMana() : int {
        return $this->mana;
    }
    
    public function setMana(int $mana) : void {
        $this->mana = $mana;
    }
}