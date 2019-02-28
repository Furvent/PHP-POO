<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 16:22
 */

namespace Vehicle\Exception;


class CarAlreadyStoppedException extends \Exception
{
    protected $code = "CS02";
    protected $message = "Car already stopped";
}