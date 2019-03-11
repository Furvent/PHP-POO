<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 10:15
 */

use Pizza\Ingredient\Dough\Dough;
use Pizza\Ingredient\Sauce\Sauce;

class Pizza
{
    private $dough;
    private $sauce;
    private $toppingList;

    /**
     * @return mixed
     */
    public function getSauce()
    {
        return $this->sauce;
    }

    /**
     * @return mixed
     */
    public function getDough()
    {
        return $this->dough;
    }

    /**
     * @return mixed
     */
    public function getToppingList()
    {
        return $this->toppingList;
    }

    public function __construct(Dough $dough, Sauce $sauce, array $toppingList)
    {

    }

    public function isVege(): bool {

    }
}