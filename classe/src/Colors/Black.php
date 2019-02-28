<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 14:18
 */

namespace Car\Colors;

class Black
{
    protected $name = "Black-alt";
    protected $hexaCode = "#000000";

    public function getHexaCode(): string
    {
        return $this->hexaCode;
    }

    public function getName(): string
    {
        return $this->name;
    }
}