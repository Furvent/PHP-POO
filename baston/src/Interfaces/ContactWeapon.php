<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 13:50
 */

namespace Baston\Interfaces;


interface ContactWeapon
{
    public function getDamage(): array;
    public function __toString();
}