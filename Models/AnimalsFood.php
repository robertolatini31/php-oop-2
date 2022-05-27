<?php

class AnimalsFood extends AnimalsProduct {
    public $type = 'food';
    public $wetFood;
    public $kibbleFood;
    
    function __construct(Int $aviabilityStart, Int $aviabilityEnd,String $name, Int $price, String $img , String $species, Bool $userLogged, Bool $wetFood, Bool $kibbleFood){
        parent::__construct($aviabilityStart, $aviabilityEnd, $name, $price, $img, $species, $userLogged);
        $this->wetFood = $wetFood;
        $this->kibbleFood = $kibbleFood;
    }
 }