<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 11/03/2019
 * Time: 13:35
 */

include "vendor/autoload.php";

use Baston\GameManager;
use Baston\Fighter\Warrior;
use Baston\Weapon\Weapon;

echo "Hello in this madness ! ";
echo "</br>";
echo "I present you two greats warriors, who will fighter each other to your pleasure";
echo "</br>";

$war1 = new Warrior("GroBil");
$war2 = new Warrior("Cohen le barbare");
echo "The first one is " . $war1->getName() . ".";
echo "</br>";
echo "The second one is " . $war2->getName() . ".";
echo "</br>";

$party = new GameManager($war1, $war2);

echo "Now, they are choosing a weapon";

echo "</br>";
$party->equipFighter($war1, $party->pickARandomWeapon());
$party->equipFighter($war2, $party->pickARandomWeapon());
echo "They are gripping their weapons in their hands";
echo "</br>";

echo $war1->getName() . " chose a " . ($war1->getWeapon()) . ". Is This really a good choice ?";
echo "</br>";
echo $war2->getName() . " chose a " . ($war2->getWeapon()) . ". Is This really a good choice ?";
echo "</br>";



echo "Now, they can begin to fight to get the gods favors !";
echo "</br>";

$party->beginToFight();
