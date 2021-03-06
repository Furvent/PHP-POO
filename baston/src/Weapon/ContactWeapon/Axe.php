<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 14:13
 */

namespace Baston\Weapon\ContactWeapon;

use Baston\Interfaces\ContactWeapon;
use Baston\Weapon\Weapon;

class Axe extends Weapon implements ContactWeapon
{

    /**
     * Axe constructor.
     */
    public function __construct()
    {
        Weapon::__construct(15, 25);
    }

    public function getDamage(): array
    {
        return [$this->minDamage, $this->maxDamage];
    }

    public function __toString()
    {
        return "axe";
    }


}