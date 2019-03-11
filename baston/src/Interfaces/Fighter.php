<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 13:54
 */

namespace Baston\Interfaces;

use Baston\Weapon\Weapon;

interface Fighter
{
    public function attack(Fighter $attacked);
    public function takeDamage(int $damage): void;
    public function getLife(): int;

    public function getWeapon(): ?Weapon;
    public function setWeapon(Weapon $weapon): void;

    public function getName(): string;

    public function dance(): void;

}