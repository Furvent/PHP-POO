<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 10:16
 */



include "vendor/autoload.php";

use Car\Colors\Pink;

// $color = new Color();
// var_dump($color->getName());
// var_dump($color->getHexaCode());

$pink = new Pink();
var_dump($pink->getName());
var_dump($pink->getHexaCode());