<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 10:10
 */

namespace Pizza\Ingredient\Topping\Meat;


class Beef extends Meat
{
    public function __construct(string $name)
    {
        Meat::__construct("Boeuf");
    }
}