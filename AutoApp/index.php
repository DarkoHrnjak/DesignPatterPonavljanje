<?php

require_once "autoload.php";

use AutoApp\Factory\CarFactory;
use AutoApp\Observers\ProductNotifier;

//==== FACTORY ====
$factory = new CarFactory();

//==== dodati observere ====
$factory->attachObserver(new ProductNotifier("Marko"));
$factory->attachObserver(new ProductNotifier("Ivana"));

//==== PROIZVODNJA ====
$factory->createCar("Audi A4",2022,"Dizel");
$factory->createCar("Tesla Model 3",2023,"Elektrićni");
$factory->createCar("VW Golf",2021,"Benzin");

//================ITERATOR================

echo "<hr>";
echo "<h3>Popis svih proizvedenih Automobila</h3>";

$cars = $factory->getCars();

foreach($cars as $car){
    echo $car->info()."<br>";
}

echo "<hr>";
echo "<br>Ukupno proizvedeno auta: ".$cars->count();

echo "<h3>Ručnp Iteriranje bez foreach-a</h3>";

$cars->rewind();

while($cars->valid()){
    $auto = $cars->current();
    echo $auto->info()."<br>";
    $cars->next();
}

$cars->rewind();

$firstCar = $cars->current();
echo "<br>Prvi proizvedeni auto: ".$firstCar->info();

$last = $cars->last();
echo "<br>Zadnji proizvedeni auto: ".$last->info();


?>