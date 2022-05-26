<?php
class AnimalsProduct {
    public $name;
    public $price;
    public $img;

    function __construct($name, $price, $img){
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
    }
}
$newAnimalsProduct = new AnimalsProduct('cuccia', '19$', 'https://picsum.photos/200/300');
var_dump($newAnimalsProduct);

 class AnimalsFood extends AnimalsProduct {
    public $type = 'food';
    public $species;
    function __construct($name, $price, $img ,$species){
        parent::__construct($name, $price, $img);
        $this->species = $species;
    }
 }

$newAnimalsFood = new AnimalsFood('cuccia', '19$', 'https://picsum.photos/200/300', 'cane');
var_dump($newAnimalsFood);