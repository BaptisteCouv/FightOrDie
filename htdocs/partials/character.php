<?php

class Character
{
    protected $name;
    protected $healthPoints;
    protected $class;
    protected $strength;
    protected $defense;
    protected $critical = 5;


    public function attack(Character $target)
    {
        // this strength enleve this healthPoint de l'adveseraire
    }

    private function takeDamage($dammage)
    {
    //this heathlPoints de notre perso - dammage (=strength de l'adversaire)   //
    }

    private function deleteIfDie()
    {
        // if this healthPoints = 0, you loose and you are deleted from the earth   //lol
    }

}