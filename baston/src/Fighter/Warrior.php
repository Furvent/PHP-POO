<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 13:57
 */

namespace Baston\Fighter;


use Baston\Interfaces\ContactWeapon;
use Baston\Interfaces\Fighter;
use Baston\Weapon\Weapon;

class Warrior extends Character implements Fighter
{
    const LIFE_MAX = 200;

    private $cacWeapon;

    /**
     * @return mixed
     */
    public function getWeapon(): ?Weapon
    {
        return $this->cacWeapon;
    }

    /**
     * @param mixed $cacWeapon
     */
    public function setWeapon(Weapon $cacWeapon): void
    {
        // TODO : ADD A VERIF ON TYPE OF WEAPON, MUST BE A CONTACT ONE
        $this->cacWeapon = $cacWeapon;
    }

    public function __construct($name)
    {
        Character::__construct($name);
        $this->life = self::LIFE_MAX;
        $this->cacWeapon = null;
    }

    public function attack(Fighter $attacked)
    {
        $min = $this->cacWeapon->getDamage()[0];
        $max = $this->cacWeapon->getDamage()[1];
        $damage = rand($min, $max);
        $attacked->takeDamage($damage);
    }

    public function takeDamage(int $damage): void
    {
        if ($this->life > $damage) {
            $this->life -= $damage;
        } else {
            $this->life = 0;
        }
    }

    public function dance(): void
    {
        echo "*Le personnage fait des gestes bizarres*";
    }

    public function getLife(): int
    {
        return $this->life;
    }

    public function getName(): string
    {
        return $this->name;
    }

}