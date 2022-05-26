<?php
class AnimalsProduct {
    public $name;
    public $price;
    public $img;

    function __construct(String $name, String $price, String $img){
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
    }
}
$newAnimalsProduct = new AnimalsProduct('cuccia', '19$', 'https://picsum.photos/200/300');
var_dump($newAnimalsProduct);

 class AnimalsFood extends AnimalsProduct {
    public $type = 'food';
    public $wetFood;
    public $kibbleFood;
    public $species;
    function __construct(String $name, String $price, String $img , String $species, Bool $wetFood, Bool $kibbleFood){
        parent::__construct($name, $price, $img);
        $this->species = $species;
        $this->wetFood = $wetFood;
        $this->kibbleFood = $kibbleFood;
    }
 }

$newAnimalsFood = new AnimalsFood('cuccia', '19$', 'https://picsum.photos/200/300', 'cane', true, false);
var_dump($newAnimalsFood);