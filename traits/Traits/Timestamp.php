<?php

/**
 * Created by PhpStorm.
 * User: matthieuKoskas
 * Date: 28/02/2019
 * Time: 11:25
 */
trait Timestamp
{
    protected $creationDate;
    protected $lastUpdate;

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getLastUpdate()
    {
        return $this->tastUpdate;
    }

    /**
     * @param mixed $tastUpdate
     */
    public function setLastUpdate($tastUpdate)
    {
        $this->tastUpdate = $tastUpdate;
    }
}