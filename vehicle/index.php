<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 15:01
 */

include "vendor/autoload.php";

use Vehicle\Car;
use Vehicle\Engine\Diesel;
use Vehicle\Exception\CarAlreadyStartedException;
use Vehicle\Exception\CarAlreadyStoppedException;

$quatreElle = new Car(new Diesel());
try {
    var_dump($quatreElle->start());
    var_dump($quatreElle->start());
} catch (CarAlreadyStartedException $e) {
    var_dump($quatreElle->stop());
}

try {
    var_dump($quatreElle->stop());
} catch (CarAlreadyStoppedException $e) {
    var_dump($quatreElle->start());
}
