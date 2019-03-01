<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 10:06
 */

namespace Car\Colors;

abstract class Color
{
    private $name = "no name";
    protected $hexaCode = "no hexa";

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function getHexaCode(): string;

}