<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 14:14
 */

namespace Baston\Weapon;


abstract class Weapon
{
    protected $minDamage;
    protected $maxDamage;

    /**
     * @return mixed
     */
    public function getMinDamage()
    {
        return $this->minDamage;
    }

    /**
     * @return mixed
     */
    public function getMaxDamage()
    {
        return $this->maxDamage;
    }

    /**
     * Weapon constructor.
     * @param $minDamage
     * @param $maxDamage
     */
    public function __construct($minDamage, $maxDamage)
    {
        $this->minDamage = $minDamage;
        $this->maxDamage = $maxDamage;
    }
}