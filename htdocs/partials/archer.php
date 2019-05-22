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
        $this->setTotalStrength();

    }

    protected function bonus()
    {
        if($this->lucky = true){
            $this->healthPoints += $this->dodge;
        }
    }

    public function setName($name)
    {
        $this->name = $name;
        
    }

    public function setStrength()
    {
        $this->strength = 20;
    }

    public function setHealthPoints()
    {
        if(!isset($_SESSION['persoHealthPoints'])){
            $this->healthPoints = 60;
        }else{
            $this->healthPoints = $_SESSION['persoHealthPoints'];
        }
    }

    public function setDefense()
    {
        $this->defense = 0;
    }
    
    public function setTotalStrength()
    {
        $this->totalStrength = $this->strength;
    }

    public function deleteIfDie()
    {
        if ($this->healthPoints <= 0) {
            $_SESSION['persoHealthPoints'] = 60;
        };
    }
}