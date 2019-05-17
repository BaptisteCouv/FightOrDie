<?php

class Character
{
    protected $name;
    protected $healthPoints;
    protected $strength;
    protected $defense;
    protected $critical = 5;
    protected $totalStrength;
    protected $lucky = false;

    public function attack(Character $target)
    {
        $this->totalStrength = 0;
        $random = rand(1, 5);

        if ($random == 1) {
            $this->totalStrength = $this->strength + $this->critical;
            $this->lucky = true;
            $this->bonus();
        } else {
            $this->totalStrength = $this->strength;
            $this->lucky = false;
        }

        $target->healthPoints = $target->healthPoints - $this->totalStrength;
    }


    public function takeDamage(Character $target)
    {
        //this heathlPoints de notre perso - dammage (=strength de l'adversaire)
        $target->totalStrength = 0;
        $random = rand(1, 5);

        if ($random == 1) {
            $target->totalStrength = $target->strength + $target->critical;
            $target->bonus();
        } else {
            $target->totalStrength = $target->strength;
        }

        $this->healthPoints = $this->healthPoints - $target->totalStrength;
    }

    public function resultat(Character $target)
    {
        echo $this->getClass() . ' : ' . $this->name . ' a infligé ' . $this->totalStrength . ' de dégats';
        echo '<br>';
        echo$this->getClass() . ' : ' . $this->name . ' a '. $this->healthPoints;
        echo'<br>';
        echo'<br>';

        echo $target->getClass() . ' : ' . $target->name . ' a '. $target->healthPoints;
        echo '<br>';
        echo $target->getClass() . ' : ' . $target->name . ' a infligé ' . $target->totalStrength;
        echo '<br>';
        echo '<br>';
    }

    public function deleteIfDie()
    {
        if ($this->healthPoints <= 0) {
            echo $this->name .' loose';
            die;
        };
    }


    public function getClass()
    {
        return get_class($this);
    }
}
