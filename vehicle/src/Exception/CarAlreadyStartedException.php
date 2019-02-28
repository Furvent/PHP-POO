<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 16:15
 */

namespace Vehicle\Exception;


class CarAlreadyStartedException extends \Exception
{
    protected $code = "CS01";
    protected $message = "Car already started";
}