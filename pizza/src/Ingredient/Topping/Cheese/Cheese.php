<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 09:59
 */

namespace Pizza\Ingredient\Topping\Cheese;

use Pizza\Ingredient\Topping\Topping;

abstract class Cheese extends Topping
{
    public function __construct(string $name)
    {
        Topping::__construct($name);
    }
}