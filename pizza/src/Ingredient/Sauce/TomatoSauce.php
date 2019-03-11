<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 09:54
 */

namespace Pizza\Ingredient\Sauce;


class TomatoSauce extends Sauce
{
    public function __construct()
    {
        Sauce::__construct("Sauce tomate");
    }
}