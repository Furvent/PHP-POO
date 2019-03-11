<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 10:14
 */

include "vendor/autoload.php";

use Pizza\Ingredient\Sauce\TomatoSauce;
use Pizza\Ingredient\Dough\ThinDough;
use Pizza\Ingredient\Topping\Cheese\Mozzarella;
use Pizza\Ingredient\Topping\Meat\Ham;
use Pizza\Ingredient\Topping\Vegetable\Mushroom;

// Create ingredients
$sauce = new TomatoSauce();
$dough = new ThinDough();
$mozza = new Mozzarella();
$ham = new Ham();
$mushroom = new Mushroom();
$toppingList = [];
array_push($mozza, $ham, $mushroom);

$pizza = new Pizza($dough, $sauce, $toppingList);
var_dump($pizza);