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
$newProduct = new AnimalsProduct('cuccia', '19$', 'https://picsum.photos/200/300');
var_dump($newProduct);

// class AnimalsFood extends AniumalProduct {
    
// }