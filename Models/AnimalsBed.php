<?php

class AnimalsBed extends Animalsproduct {
    public $type = 'bed';
    public $houseBed;
    public $cushionBed;
    public $species;
    function __construct(Int $aviabilityStart, Int $aviabilityEnd, String $name, Int $price, String $img , String $species, Bool $userLogged, Bool $houseBed, Bool $cushionBed){
        parent::__construct($aviabilityStart, $aviabilityEnd, $name, $price, $img, $species, $userLogged);
        $this->houseBed = $houseBed;
        $this->cushionBed = $cushionBed;
    }
}