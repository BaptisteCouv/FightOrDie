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
        if ($this->class =='Archer'){
            $this->imgPath = "../assets/img/archer.gif";
        }else if ($this->class =='Warrior'){
            $this->imgPath = "../assets/img/warrior.gif";
        }else if ($this->class =='Wizzard'){
            $this->imgPath = "../assets/img/wizzard.gif";
        }else{
            echo "comment t'es arrivé la";
        }
    }


    public function afficherCard()
    {
        echo '
                <div class="cards col-">
                    <div class="cards-img">
                        <img src=' . $this->imgPath . ' alt="">
                    </div>
                    <div class="cards-text">
                    '. $this->class .'
                    </div>
                    <div class="cards-choix">
                        <form action="arene.php" method="post">
                            <input type="hidden" name="class" value="'. $this->class .'">
                            <button type="submit">Valider</button>
                        </form>
                    </div>
                </div>
        ';
    }
}










