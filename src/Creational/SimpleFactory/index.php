<?php

require_once '../../../vendor/autoload.php';

$factory = new \Creational\SimpleFactory\SimpleFactory();

$car = $factory->createCar('Audi', 'A8');

var_dump($car->drive());
