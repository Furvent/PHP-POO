<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 14:39
 */

namespace Vehicle;

use Vehicle\Exception\CarAlreadyStartedException;
use Vehicle\Exception\CarAlreadyStoppedException;

class Car
{
    const STATUS_ON = "on";
    const STATUS_OFF = "off";
    private $status;

    private $engine;

    /**
     * Car constructor.
     * @param $engine
     */
    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
        $this->status = self::STATUS_OFF;
    }


    public function start()
    {
        if ($this->status === self::STATUS_OFF) {
            $this->status = self::STATUS_ON;
            return $this->engine->turnOn();
        } else {
            throw new CarAlreadyStartedException();
        }
    }

    public function stop()
    {
        if ($this->status === self::STATUS_ON) {
            $this->status = self::STATUS_OFF;
            return $this->engine->turnOff();
        } else {
            throw new CarAlreadyStoppedException();
        }
    }
}