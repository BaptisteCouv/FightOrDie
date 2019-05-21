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
        $this->setTotalStrength();
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
        if(!isset($_SESSION['persoHealthPoints'])){
            $this->healthPoints = 80;
        }else{
            $this->healthPoints = $_SESSION['persoHealthPoints'];
        }
        
    }

    private function setDefense()
    {
        $this->defense = 0;
    }
    private function setTotalStrength()
    {
        $this->totalStrength = $this->strength;
    }


}