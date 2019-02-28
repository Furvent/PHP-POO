<?php
/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 14:39
 */

namespace Vehicle;


class Car
{
    private $engine;

    private $isRunning;

    /**
     * Car constructor.
     * @param $engine
     */
    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
        $this->isRunning = false;
    }


    public function start()
    {
        if (!$this->isRunning) {
            $this->isRunning = true;
            return $this->engine->turnOn();
        }
    }

    public function stop()
    {
        if($this->isRunning) {
            $this->isRunning = false;
            return $this->engine->turnOff();
        }
    }
}