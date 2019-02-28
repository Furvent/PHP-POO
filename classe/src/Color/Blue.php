<?php

namespace Car\Color;

class Blue implements  ColorInterface{
    public function getName() : string {
        return "Blue";
    }

    public function getHexaCode() : string {
        return "#0000ff";
    }
}