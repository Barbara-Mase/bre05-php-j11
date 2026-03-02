<?php

require_once "Character.php"; 

class Mage extends Character {
    
    public function __construct (private int $mana) {
        $this->life = $life; 
        $this->name = $name;
    }
    
    public function getMana() : int {
        return $this->mana;
    }
    
    public function setMane(int $mana) : void {
        $this->mana = $mana;
    }
}