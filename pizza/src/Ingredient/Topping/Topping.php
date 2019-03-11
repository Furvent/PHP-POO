<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 09:56
 */

namespace Pizza\Ingredient\Topping;

use Pizza\Ingredient\Ingredient;

abstract class Topping extends Ingredient
{
    public function __construct(string $name)
    {
        Ingredient::__construct($name);
    }
}