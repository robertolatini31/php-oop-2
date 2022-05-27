<?php
require_once __DIR__ . '/./Models/User.php';
require_once __DIR__ . '/./Models/AnimalsProduct.php';
require_once __DIR__ . '/./Models/AnimalsFood.php';
require_once __DIR__ . '/./Models/AnimalsGame.php';
require_once __DIR__ . '/./Models/AnimalsBed.php';
require_once __DIR__ . '/./Models/AnimalsClothing.php';

$newUser = new User('mario', true, '07', '23');

$newAnimalsProduct = new AnimalsProduct('01', '12', 'cuccia', 19, 'https://picsum.photos/200/300', 'cane', $newUser->userLogged);

$newAnimalsFood = new AnimalsFood('01', '12', 'manzo in scatola', 19, 'https://picsum.photos/200/300', 'cane', true, true, false);

$newAnimalsGame = new AnimalsGame('01', '04', 'frisbee', 19, 'https://picsum.photos/200/300', 'cane', $newUser->userLogged, true, false);

$newAnimalsBed = new AnimalsBed('05', '07', 'casetta', 19, 'https://picsum.photos/200/300', 'cane', $newUser->userLogged, true, false);

$newAnimalsClothing = new AnimalsClothing('07', '11', 'impermeabile star wars', 19, 'https://picsum.photos/200/300', 'cane', $newUser->userLogged, true, false);