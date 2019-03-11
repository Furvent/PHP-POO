<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 13:57
 */

namespace Baston\Fighter;


abstract class Character
{
    protected $name;
    protected $life;

    public function __construct($name)
    {
        $this->name = $name;
    }
}