<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 14:47
 */

namespace Vehicle;


interface EngineInterface
{
    public function turnOn();
    public function turnOff();
}