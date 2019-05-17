<?php 

class Warrior extends Character 
{
    public function __construct($name, $class)
    {
        $this->name = $name;
        $this->class = $class;
    } 

    public function setName($name)
    {
        $this->name = $name;
        
    }

    public function setClass($class)
    {
        $this->class = $class;
        
    }

    private function takeDammage()
    {
       //Prends des dégats supp selon la class de la target //
    }

    public function name(){
        echo $this->name;
    }
}