<?php
class AnimalsProduct {
    public $name;
    public $price;
    public $img;
    public $species;
    function __construct(String $name, Int $price, String $img, String $species, Bool $userLogged = false){
        $this->name = $name;
        $this->price = $this->calcPrice($price, $userLogged);
        $this->img = $img;
        $this->species = $species;
    }
    public function calcPrice($price, $userLogged) {
        if ($userLogged) {
            $finalPrice = $price - ($price * 0.2);;
            return "$finalPrice$" ;
        } else {
            return "$price$";
        }
    }
}
$newAnimalsProduct = new AnimalsProduct('cuccia', 19, 'https://picsum.photos/200/300', 'cane', true);
var_dump($newAnimalsProduct);

 class AnimalsFood extends AnimalsProduct {
    public $type = 'food';
    public $wetFood;
    public $kibbleFood;
    
    function __construct(String $name, Int $price, String $img , String $species, Bool $userLogged, Bool $wetFood, Bool $kibbleFood){
        parent::__construct($name, $price, $img, $species, $userLogged);
        $this->wetFood = $wetFood;
        $this->kibbleFood = $kibbleFood;
    }
 }

$newAnimalsFood = new AnimalsFood('manzo in scatola', 19, 'https://picsum.photos/200/300', 'cane', true, true, false);
var_dump($newAnimalsFood);


class AnimalsGame extends Animalsproduct {
    public $type = 'game';
    public $rubberGame;
    public $clothGame;
    public $species;
    function __construct(String $name, Int $price, String $img , String $species, Bool $userLogged, Bool $rubberGame, Bool $clothGame){
        parent::__construct($name, $price, $img, $species, $userLogged);
        $this->rubberGame = $rubberGame;
        $this->clothGame = $clothGame;
    }
}

$newAnimalsGame = new AnimalsGame('frisbee', 19, 'https://picsum.photos/200/300', 'cane', true, true, false);
var_dump($newAnimalsGame);


class AnimalsBed extends Animalsproduct {
    public $type = 'bed';
    public $houseBed;
    public $cushionBed;
    public $species;
    function __construct(String $name, Int $price, String $img , String $species, Bool $userLogged, Bool $houseBed, Bool $cushionBed){
        parent::__construct($name, $price, $img, $species, $userLogged);
        $this->houseBed = $houseBed;
        $this->cushionBed = $cushionBed;
    }
}

$newAnimalsBed = new AnimalsBed('casetta', 19, 'https://picsum.photos/200/300', 'cane', false, true, false);
var_dump($newAnimalsBed);



class AnimalsClothing extends Animalsproduct {
    public $type = 'clothing';
    public $waterproofClothing;
    public $coatClothing;
    public $species;
    function __construct(String $name, Int $price, String $img , String $species, Bool $userLogged, Bool $waterproofClothing, Bool $coatClothing){
        parent::__construct($name, $price, $img, $species, $userLogged);
        $this->waterproofClothing = $waterproofClothing;
        $this->coatClothing = $coatClothing;
    }
}

$newAnimalsClothing = new AnimalsClothing('impermeabile star wars', 19, 'https://picsum.photos/200/300', 'cane', false, true, false);
var_dump($newAnimalsClothing);


