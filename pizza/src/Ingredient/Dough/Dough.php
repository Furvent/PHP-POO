<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 09:57
 */

namespace Pizza\Ingredient\Dough;

use Pizza\Ingredient\Ingredient;

abstract class Dough extends Ingredient
{
    public function __construct(string $name)
    {
        Ingredient::__construct($name);
    }
}