<?php 

class Wizzard extends Character 
{
    private $heal = 3;
    
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
            $this->healthPoints += $this->heal;
            echo 'BONUS WIZZARD <br>';
        }
    }

    public function setName($name)
    { 
        $this->name = $name;
        
    }

    private function setStrength()
    {
        $this->strength = 15;
    }

    private function setHealthPoints()
    {
        $this->healthPoints = 80;
    }

    private function setDefense()
    {
        $this->defense = 0;
    }

}