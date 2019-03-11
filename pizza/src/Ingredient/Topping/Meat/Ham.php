<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 10:10
 */

namespace Pizza\Ingredient\Topping\Meat;


class Ham extends Meat
{
    public function __construct()
    {
        Meat::__construct("Jambon");
    }
}