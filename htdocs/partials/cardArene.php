<?php

class CardArene extends Card
{
    private $class;
    private $imgPath;
    
    public function __construct($class)
    {
        $this->setClass($class);
        $this->setImg();
    }

    public function setClass($class)
    {
        $this->class = $class;
    }

    public function setImg()
    {
        $this->imgPath = "../assets/img/".lcfirst($this->class).".gif";

    }

    public function afficherCardArene()
    {
        echo '
            <div class="cardArene">
                <div class="cardArene-img">
                    <img class="cardArene-img" src=' . $this->imgPath . ' alt="">
                </div>
                <div class="cardArene-text">
                    '. $this->class .'
                </div>
            </div>
        ';
    }

    public function afficherBouton()
    {
        echo '

        <div class="cardArene-atk">
            <button>Attaquer</button>
        </div>  
        ';
    }
}   