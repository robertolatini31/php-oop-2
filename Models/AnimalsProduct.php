<?php

class AnimalsProduct {
    public $availability;
    public $aviabilityStart;
    public $aviabilityEnd;
    public $name;
    public $price;
    public $img;
    public $species;
    function __construct(String $aviabilityStart, String $aviabilityEnd, String $name, Int $price, String $img, String $species, Bool $userLogged = false){
        $this->name = $name;
        $this->price = $this->calcPrice($price, $userLogged);
        $this->img = $img;
        $this->species = $species;
        $this->aviabilityStart = $aviabilityStart;
        $this->aviabilityEnd = $aviabilityEnd;
        $this->productAviability();
    }
    public function calcPrice($price, $userLogged) {
        if ($userLogged) {
            $finalPrice = $price - ($price * 0.2);;
            return "$finalPrice$" ;
        } else {
            return "$price$";
        }
    }
    public function productAviability() {
        $month = date('m');
        if ($month >= $this->aviabilityStart && $month <= $this->aviabilityEnd) {
            $this->availability = true;
        } else {
            $this->availability = false;
        }
    }
}