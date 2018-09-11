<?php


class Car
{
    protected $manufactor;
    protected $doors;

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @param mixed $doors
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;
    }

    /**
     * @return mixed
     */
    public function getManufactor()
    {
        return $this->manufactor;
    }

    /**
     * @param mixed $manufactor
     */
    public function setManufactor($manufactor)
    {
        $this->manufactor = $manufactor;
    }

}