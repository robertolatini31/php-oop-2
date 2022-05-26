<?php
class AnimalsProduct {
    public $name;
    public $price;
    public $img;
    public $species;
    function __construct(String $name, String $price, String $img, String $species){
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->species = $species;
    }
}
$newAnimalsProduct = new AnimalsProduct('cuccia', '19$', 'https://picsum.photos/200/300', 'cane');
var_dump($newAnimalsProduct);

 class AnimalsFood extends AnimalsProduct {
    public $type = 'food';
    public $wetFood;
    public $kibbleFood;
    
    function __construct(String $name, String $price, String $img , String $species, Bool $wetFood, Bool $kibbleFood){
        parent::__construct($name, $price, $img, $species);
        $this->wetFood = $wetFood;
        $this->kibbleFood = $kibbleFood;
    }
 }

$newAnimalsFood = new AnimalsFood('cuccia', '19$', 'https://picsum.photos/200/300', 'cane', true, false);
var_dump($newAnimalsFood);


class AnimalsGame extends Animalsproduct {
    public $type = 'game';
    public $rubberGame;
    public $clothGame;
    public $species;
    function __construct(String $name, String $price, String $img , String $species, Bool $rubberGame, Bool $clothGame){
        parent::__construct($name, $price, $img, $species);
        $this->rubberGame = $rubberGame;
        $this->clothGame = $clothGame;
    }
}

$newAnimalsGame = new AnimalsGame('cuccia', '19$', 'https://picsum.photos/200/300', 'cane', true, false);
var_dump($newAnimalsGame);