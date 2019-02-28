<?php

namespace Car\Color;

class Black implements ColorInterface
{
    public function getName(): string
    {
        return "Black";
    }

    public function getHexaCode(): string
    {
        return "#000000";

    }
}