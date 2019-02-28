<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 14:50
 */

namespace Vehicle\Engine;

use Vehicle\EngineInterface;

class Diesel implements EngineInterface
{
    public function turnOn()
    {
        return "on";
    }

    public function turnOff()
    {
        return "off";
    }

}