<?php

class Card {
    private $class;
    private $imgPath;
  
    const ARCHER = 'Archer';
    const WARRIOR = 'Warrior';
    const WIZZARD = 'Wizzard';

    public function __construct($class)
    {
        $this->setClass($class);
        $this->setImg();
    }

    public function setClass($class)
    {
        if(in_array($class, [self::ARCHER, self::WARRIOR, self::WIZZARD])){
            $this->class = $class;
        }
    }
    public function setImg()
    {
        $this->imgPath = "../assets/img/".lcfirst($this->class).".gif";

    }
    public function afficherCard()
    {
        echo '
                <div class="cards col-">
                    <div class="cards-img">
                        <img class="cards-img" src=' . $this->imgPath . ' alt="">
                    </div>
                    <div class="cards-text">
                    '. $this->class .'
                    </div>
                    <div class="cards-choix">
                        <form action="../layout/traitementChoixPersonnage.php" method="post">
                            <input type="hidden" name="class" value="'. $this->class .'">
                            <button type="submit" class="but-case">Selectionner</button>
                        </form>
                    </div>
                </div>
        ';
    }
}










