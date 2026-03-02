<?php

require_once "Character.php"; 

class Warrior extends Character 

{
    public function __construct (private int $energy = 18) {
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