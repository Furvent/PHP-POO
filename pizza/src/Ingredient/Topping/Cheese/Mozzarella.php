<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 10:08
 */

namespace Pizza\Ingredient\Topping\Cheese;


class Mozzarella extends Cheese
{
    public function __construct()
    {
        Cheese::__construct("Mozzarella");
    }
}