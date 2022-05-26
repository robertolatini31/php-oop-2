<?php
class User {
    public $name;
    public $userLogged;
    public $cardMonth;
    public $cardYear;
    public $cardControl;
    function __construct(String $name, Bool $userLogged, Int $cardMonth, Int $cardYear) {
        $this->name = $name;
        $this->userLogged = $userLogged;
        $this->cardMonth = $cardMonth;
        $this->cardYear = $cardYear;
        $this->cardControl();
    }
    public function cardControl() {
        $month = idate('m');
        $year = idate('y');
        if ($this->cardMonth > $month && $this->cardYear >= $year) {
            var_dump('puoi pagare');
            $this->cardControl = true;
        } else {
            var_dump('pagamento rifiutato, carta scaduta');
            $this->cardControl = false;
        }

    }
}
$newUser = new User('mario', true, 07, 33);
var_dump($newUser);
class AnimalsProduct {
    public $availability;
    public $aviabilityStart;
    public $aviabilityEnd;
    public $name;
    public $price;
    public $img;
    public $species;
    function __construct(Int $aviabilityStart, Int $aviabilityEnd, String $name, Int $price, String $img, String $species, Bool $userLogged = false){
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
        $month = idate('m');
        if ($month > $this->aviabilityStart && $month < $this->aviabilityEnd) {
            $this->availability = true;
        } else {
            $this->availability = false;
        }
    }
}
$newAnimalsProduct = new AnimalsProduct(01, 12, 'cuccia', 19, 'https://picsum.photos/200/300', 'cane', $newUser->userLogged);
var_dump($newAnimalsProduct);

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

$newAnimalsFood = new AnimalsFood(01, 12, 'manzo in scatola', 19, 'https://picsum.photos/200/300', 'cane', true, true, false);
var_dump($newAnimalsFood);


class AnimalsGame extends Animalsproduct {
    public $type = 'game';
    public $rubberGame;
    public $clothGame;
    public $species;
    function __construct(Int $aviabilityStart, Int $aviabilityEnd, String $name, Int $price, String $img , String $species, Bool $userLogged, Bool $rubberGame, Bool $clothGame){
        parent::__construct($aviabilityStart, $aviabilityEnd, $name, $price, $img, $species, $userLogged);
        $this->rubberGame = $rubberGame;
        $this->clothGame = $clothGame;
    }
}

$newAnimalsGame = new AnimalsGame(01, 04, 'frisbee', 19, 'https://picsum.photos/200/300', 'cane', $newUser->userLogged, true, false);
var_dump($newAnimalsGame);


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

$newAnimalsBed = new AnimalsBed(05, 07, 'casetta', 19, 'https://picsum.photos/200/300', 'cane', $newUser->userLogged, true, false);
var_dump($newAnimalsBed);



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

$newAnimalsClothing = new AnimalsClothing(07, 11, 'impermeabile star wars', 19, 'https://picsum.photos/200/300', 'cane', $newUser->userLogged, true, false);
var_dump($newAnimalsClothing);


