<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 14:04
 */

include "vendor/autoload.php";

use Car\Colors\Pink;
use Car\Colors\Black as BlackAlt;
use Car\Color\Black;

$pink = new Pink();
var_dump($pink->getName());
var_dump($pink->getHexaCode());

$black = new Black();
var_dump($black->getName());
var_dump($black->getHexaCode());

$blackAlt = new BlackAlt();
var_dump($blackAlt->getName());
var_dump($blackAlt->getHexaCode());