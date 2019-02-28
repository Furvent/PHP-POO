<?php
include "Car.php";
include "Color/ColorInterface.php";
include "Color/Black.php";
include "Color/Blue.php";
include "Color/Red.php";
include "Color/White.php";
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
$red = new Red();
$white = new White();
$stock = new ColorStock();
$stock->addColor($black);
$stock->addColor($blue);
$stock->addColor($red);
$stock->addColor($white);

var_dump($stock->searchColorByName("Red"));
var_dump($stock->searchColorByHexaCode("#ff0000"));
