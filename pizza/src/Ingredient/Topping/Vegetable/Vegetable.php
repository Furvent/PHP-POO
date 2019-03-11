<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 10:00
 */

namespace Pizza\Ingredient\Topping\Vegetable;

use Pizza\Ingredient\Topping\Topping;

abstract class Vegetable extends Topping
{
    public function __construct(string $name)
    {
        Topping::__construct($name);
    }
}