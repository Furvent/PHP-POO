<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 09:53
 */

namespace Car\Color;

class White implements ColorInterface
{
    private $name = "White";
    private $hexacode = "#ffffff";
    public function getName(): string
    {
        return $this->name;
    }

    public function getHexaCode(): string
    {
        return $this->hexacode;

    }
}