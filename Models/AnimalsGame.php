<?php

class AnimalsGame extends Animalsproduct {
    public $type = 'game';
    public $rubberGame;
    public $clothGame;
    public $species;
    function __construct(String $aviabilityStart, String $aviabilityEnd, String $name, Float $price, String $img , String $species, Bool $userLogged, Bool $rubberGame, Bool $clothGame){
        parent::__construct($aviabilityStart, $aviabilityEnd, $name, $price, $img, $species, $userLogged);
        $this->rubberGame = $rubberGame;
        $this->clothGame = $clothGame;
    }
}