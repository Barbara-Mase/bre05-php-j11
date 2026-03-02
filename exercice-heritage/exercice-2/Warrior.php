<?php

//A faire corriger 

require_once "Character.php"; 


//La class worrior étend la classe Character : permet d'utiliser la classe Character ici
class Warrior extends Character 

{
    public function __construct (private int $energy = 18) {
        //Attribut de la classe character initialisé
        $life = 0;
        $name = 'Brutus'; 
        
    }
    
    public function getEnergy() : int {
        return $this->energy;
    }
    
    public function setEnergy(int $energy) : void {
        $this->energy = $energy;
    }
}