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
        $this->setTotalStrength();
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
        if(!isset($_SESSION['persoHealthPoints'])){
            $this->healthPoints = 100;
        }else{
            $this->healthPoints = $_SESSION['persoHealthPoints'];
        }
        
    }

    private function setDefense()
    {
        $this->defense = 20;
    }

    private function setTotalStrength()
    {
        $this->totalStrength = $this->strength;
    }

}