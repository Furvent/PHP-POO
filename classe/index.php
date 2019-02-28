<?php
include "Car.php";
include "Color/Black.php";
include "Color/Blue.php";
include "ColorStock.php";

#$greatCar = new Car("zebra");

#var_dump(CAR::MAX_SPEED);
#var_dump($greatCar->start());
#var_dump($greatCar->stop());

#var_dump($greatCar->getP2());

// var_dump($greatCar);
// var_dump(get_class($greatCar));

// var_dump($greatCar instanceof Car);

$black = new Black();
$blue = new Blue();
$stock = new ColorStock();
$stock->addColor($black);
$stock->addColor($blue);

var_dump($stock->searchColorByName("Black"));
