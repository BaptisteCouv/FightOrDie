<?php 

class Warrior extends Character 
{
    public function __construct($name, $class)
    {
        $this->name = $name;
        $this->class = $class;
    } 

    private function takeDammage()
    {
       //Prends des dégats supp selon la class de la target //
    }
}