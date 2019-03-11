<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 09:53
 */

namespace Pizza\Ingredient\Sauce;

use Pizza\Ingredient\Ingredient;

abstract class Sauce extends Ingredient
{
    public function __construct(string $name)
    {
        Ingredient::__construct($name);
    }
}