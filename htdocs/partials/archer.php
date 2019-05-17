<?php 

class Archer extends Character 
{
    private $dodge = 3;

    public function __construct($name)
    {
        $this->name = $name;
        $this->setStrength();
        $this->setHealthPoints();
        $this->setDefense();

    }

    protected function bonus()
    {
        if($this->lucky = true){
            $this->healthPoints += $this->dodge;
            echo 'bonus archer';
        }
    }

    public function setName($name)
    {
        $this->name = $name;
        
    }

    private function setStrength()
    {
        $this->strength = 20;
    }

    private function setHealthPoints()
    {
        $this->healthPoints = 60;
    }

    private function setDefense()
    {
        $this->defense = 0;
    }
    
    private function takeDammage()
    {
      //Prends des dégats supp selon la class de la target //
    }


}