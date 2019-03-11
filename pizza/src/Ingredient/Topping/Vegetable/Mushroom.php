<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 10:12
 */

namespace Pizza\Ingredient\Topping\Vegetable;


class Mushroom extends Vegetable
{
    public function __construct()
    {
        Vegetable::__construct("Champignon");
    }
}