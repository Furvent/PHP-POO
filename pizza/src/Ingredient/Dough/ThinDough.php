<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 11:02
 */

namespace Pizza\Ingredient\Dough;


class ThinDough extends Dough
{
    public function __construct()
    {
        Dough::__construct("Pâte ultra fine");
    }
}