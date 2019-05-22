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
        }

    }

    public function setName($name)
    {
        $this->name = $name;
        
    }

    public function setStrength()
    {
        $this->strength = 10;
    }

    public function setHealthPoints()
    {
        if(!isset($_SESSION['persoHealthPoints'])){
            $this->healthPoints = 100;
        }else{
            $this->healthPoints = $_SESSION['persoHealthPoints'];
        }
        
    }

    public function setDefense()
    {
        $this->defense = 20;
    }

    public function setTotalStrength()
    {
        $this->totalStrength = $this->strength;
    }

    public function deleteIfDie()
    {
        if ($this->healthPoints <= 0) {
            $_SESSION['persoHealthPoints'] = 100;
        };
    }

}