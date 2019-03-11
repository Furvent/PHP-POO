<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 10:09
 */

namespace Pizza\Ingredient\Topping\Cheese;

class Emmental extends Cheese
{
    public function __construct()
    {
        Cheese::__construct("Emmental");
    }
}