<?php

class AnimalsClothing extends Animalsproduct {
    public $type = 'clothing';
    public $waterproofClothing;
    public $coatClothing;
    public $species;
    function __construct(Int $aviabilityStart, Int $aviabilityEnd, String $name, Int $price, String $img , String $species, Bool $userLogged, Bool $waterproofClothing, Bool $coatClothing){
        parent::__construct($aviabilityStart, $aviabilityEnd, $name, $price, $img, $species, $userLogged);
        $this->waterproofClothing = $waterproofClothing;
        $this->coatClothing = $coatClothing;
    }
}