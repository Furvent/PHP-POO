<?php

class ColorStock {
    private $colors = [];

    public function addColor($color) {
        if (!$this->colorExists($color)) {
            $this->colors[] = $color;
        }
    }

    public function removeColor($color) {
        $index = array_search($color, $this->colors);
        if ($index !== false) {
            unset($this->colors[$index]);
        }
    }

    public function colorExists($color) {
        return in_array($color, $this->colors);
    }

    public function getColorCount() : int {
        return count($this->colors);
    }

    public function searchColorByName(string $name) {
        $tab = array_filter($this->colors, function ($col) use ($name) {
            return ($col->getName() === $name);
        });

        if (count($tab) > 0) {
            reset($tab);
            return $tab[0];
        } else {
            return null;
        }
    }

    public function searchColorByHexaCode($hexacode) {
        $tab = array_filter($this->colors, function ($col) use ($hexacode) {
            return ($col->getHexaCode() === $hexacode);
        });

        if (count($tab) > 0) {
            reset($tab);
            return $tab[0];
        } else {
            return null;
        }
    }
}

