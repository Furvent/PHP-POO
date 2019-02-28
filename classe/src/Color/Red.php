<?php

namespace Car\Color;

class Red implements  ColorInterface{
    public function getName() : string {
        return "Red";
    }

    public function getHexaCode(): string
    {
        return "#ff0000";
    }
}