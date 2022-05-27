<?php

class AnimalsFood extends AnimalsProduct {
    public $type = 'food';
    public $wetFood;
    public $kibbleFood;
    
    function __construct(String $aviabilityStart, String $aviabilityEnd,String $name, Float $price, String $img , String $species, Bool $userLogged, Bool $wetFood, Bool $kibbleFood){
        parent::__construct($aviabilityStart, $aviabilityEnd, $name, $price, $img, $species, $userLogged);
        $this->wetFood = $wetFood;
        $this->kibbleFood = $kibbleFood;
    }
 }