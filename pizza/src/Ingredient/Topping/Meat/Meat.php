<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 10:03
 */

namespace Pizza\Ingredient\Topping\Meat;

use Pizza\Ingredient\Topping\Topping;

abstract class Meat extends Topping
{
    public function __construct(string $name)
    {
        Topping::__construct($name);
    }
}