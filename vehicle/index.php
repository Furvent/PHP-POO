<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 15:01
 */

include "vendor/autoload.php";

use Vehicle\Engine\Diesel;
use Vehicle\Car;

$quatreElle = new Car(new Diesel());
var_dump($quatreElle->start());
var_dump($quatreElle->stop());