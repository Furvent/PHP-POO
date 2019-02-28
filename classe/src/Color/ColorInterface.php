<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 09:34
 */

namespace Car\Color;

interface ColorInterface
{
    public function getName(): string;
    public function getHexaCode(): string;
}