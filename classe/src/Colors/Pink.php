<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 10:14
 */

namespace Car\Colors;

class Pink extends Color
{

    protected $hexaCode = "#FFC0CB";

    public function getHexaCode(): string
    {
        return $this->hexaCode;
    }
}