<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 10:11
 */

namespace Pizza\Ingredient\Topping\Vegetable;


class Artichoke extends Vegetable
{
    public function __construct()
    {
        Vegetable::__construct("Artichaud");
    }
}