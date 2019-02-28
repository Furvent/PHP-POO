<?php

namespace Car;

use Car\Colors\Color;

class ColorStockH
{
    private $colors = [];

    public function addColor(Color $color): void
    {
        if (!$this->colorExists($color)) {
            $this->colors[] = $color;
        }
    }

    public function removeColor(Color $color): bool
    {
        $index = array_search($color, $this->colors);
        if ($index !== false) {
            unset($this->colors[$index]);
        }
    }

    public function colorExists(Color $color): bool
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
    public function searchColorByHexaCode($hexacode): Color
    {
        $tab = array_filter(
            $this->colors,
            function (Color $col) use ($hexacode) {
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

    public function searchColorByName(string $name): Color
    {
        $tab = array_filter(
            $this->colors,
            function (Color $col) use ($name) {
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