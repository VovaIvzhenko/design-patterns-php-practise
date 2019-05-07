<?php

require_once '../../../vendor/autoload.php';

$factory = new \Creational\AbstractFactory\ProductFactory();

$digitalProduct = $factory->createDigitalProduct(150);
echo $digitalProduct->calculatePrice();

echo PHP_EOL;

$shippableProduct = $factory->createShippableProduct(150);
echo $shippableProduct->calculatePrice();