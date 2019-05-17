<?php 

class Warrior extends Character 
{
    private $shield = 2;

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
            $this->defense += $this->shield;
            echo 'BONUS WARRIOR';
        }

    }

    public function setName($name)
    {
        $this->name = $name;
        
    }

    private function setStrength()
    {
        $this->strength = 10;
    }

    private function setHealthPoints()
    {
        $this->healthPoints = 100;
    }

    private function setDefense()
    {
        $this->defense = 20;
    }
}