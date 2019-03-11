<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 13:49
 */

namespace Baston;


use Baston\Interfaces\Fighter;
use Baston\Weapon\ContactWeapon\Axe;
use Baston\Weapon\ContactWeapon\Dagger;
use Baston\Weapon\ContactWeapon\Spear;
use Baston\Weapon\Weapon;

/**
 * Class GameManager
 * @package Baston
 */
class GameManager
{
    const WEAPONS_AVAILABLE = ["axe", "spear", "dagger"];

    private $fighter1;
    private $fighter2;

    private $attackingFighter;
    private $attackedFighter;

    private $round;
    private $bloodQuantity;

    /**
     * @return Fighter
     */
    public function getFighter1(): Fighter
    {
        return $this->fighter1;
    }

    /**
     * @return Fighter
     */
    public function getFighter2(): Fighter
    {
        return $this->fighter2;
    }

    /**
     * @return null
     */
    public function getAttackingFighter()
    {
        return $this->attackingFighter;
    }

    /**
     * @param null $attackingFighter
     */
    public function setAttackingFighter($attackingFighter): void
    {
        $this->attackingFighter = $attackingFighter;
    }

    /**
     * @return mixed
     */
    public function getRound()
    {
        return $this->round;
    }

    /**
     * @param mixed $round
     */
    public function setRound($round): void
    {
        $this->round = $round;
    }

    /**
     * @return mixed
     */
    public function getBloodQuantity()
    {
        return $this->bloodQuantity;
    }

    /**
     * @param mixed $bloodQuantity
     */
    public function setBloodQuantity($bloodQuantity): void
    {
        $this->bloodQuantity = $bloodQuantity;
    }


    /**
     * GameManager constructor.
     * @param $fighter1
     * @param $fighter2
     * @param $attackingFighter
     */
    public function __construct(Fighter $fighter1, Fighter $fighter2)
    {
        if ($fighter1 === $fighter2) {
            // TODO : Same fighter exception
            echo "SAME FIGHTER EXCEPTION";
        }
        $this->fighter1 = $fighter1;
        $this->fighter2 = $fighter2;
        $this->attackingFighter = null;
        $this->attackedFighter = null;
    }

    /**
     * Equip both fighters to the blood bath !
     */
    public function equipFighter(Fighter $fighter,Weapon $weapon): void
    {
        if ($fighter->getWeapon() === null) {
            $fighter->setWeapon($weapon);
        } else {
            // ALREADY GET WEAPON EXCEPTION
            return;
        }
    }

    public function pickARandomWeapon(): Weapon {
        $rand = rand(1, sizeof(self::WEAPONS_AVAILABLE)) - 1;
        $weaponType = self::WEAPONS_AVAILABLE[$rand];
        switch ($weaponType) {
            case "axe":
                return new Axe();
                break;
            case "spear":
                return new Spear();
                break;
            case "dagger":
                return new Dagger();
                break;
        }
    }

    public function beginToFight() {
        $this->checkIfFightersHaveAWeapon();
        $this->attackingFighter = $this->fighter1;
        $this->attackedFighter = $this->fighter2;
        $this->fight($this->fighter1);
    }

    private function checkIfFightersHaveAWeapon() {
        // check if both warriors have a weapon
        if (!is_subclass_of($this->fighter1->getWeapon(), Weapon::class)) {
            // TODO Throw Exception
            echo "Exception no weapon to war 1";
            echo "</br>";
        }
        if (!is_subclass_of($this->fighter2->getWeapon(), Weapon::class)) {
            // TODO Throw Exception
            echo "Exception no weapon to war 2";
            echo "</br>";
        }
    }

    private function fight(Fighter $striker) {
        $striker->attack($this->attackedFighter);
        echo "" . $striker->getName() . " attack !";
        echo "</br>";
        if ($this->attackedFighter->getLife() <= 0) {
            $this->endFight($this->attackedFighter);
        } else {
            echo "" . $this->attackedFighter->getName() . " is touched, now he haves " . $this->attackedFighter->getLife() . " points of life";
            echo "</br>";

            $this->attackingFighter = $this->attackedFighter;
            $this->attackedFighter = $striker;

            $this->fight($this->attackingFighter);
        }
    }

    private function endFight(Fighter $fighter) {
        echo "" . $fighter->getName() . " is dead !";
        echo "</br>";
    }
}