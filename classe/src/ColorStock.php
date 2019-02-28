<?php

namespace Car;

use Car\Color\ColorInterface;

class ColorStock
{
    private $colors = [];

    public function addColor(ColorInterface $color): void
    {
        if (!$this->colorExists($color)) {
            $this->colors[] = $color;
        }
    }

    public function removeColor(ColorInterface $color): bool
    {
        $index = array_search($color, $this->colors);
        if ($index !== false) {
            unset($this->colors[$index]);
        }
    }

    public function colorExists(ColorInterface $color): bool
    {
        return in_array($color, $this->colors);
    }

    public function getColorCount(): int
    {
        return count($this->colors);
    }


    /**
     * Send back color with hexa code.
     * First create en array with all colors that match the hexa use to search.
     * Then send back the first element of this new array.
     */
    public function searchColorByHexaCode($hexacode): ColorInterface
    {
        $tab = array_filter(
            $this->colors,
            function (ColorInterface $col) use ($hexacode) {
                return ($col->getHexaCode() === $hexacode);
            }
        );

        if (count($tab) > 0) {
            $tab = array_values($tab);
            return $tab[0];
        } else {
            return null;
        }
    }

    public function searchColorByName(string $name): ColorInterface
    {
        $tab = array_filter(
            $this->colors,
            function (ColorInterface $col) use ($name) {
                return $col->getName() === $name;
            });

        if (count($tab) > 0) {
            $tab = array_values($tab);
            return $tab[0];
        } else {
            return null;
        }
    }
}