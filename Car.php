<?php


class Car
{
    protected $_manufactor;
    protected $_doors;

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->_doors;
    }

    /**
     * @param mixed $_doors
     */
    public function setDoors($_doors)
    {
        $this->_doors = $_doors;
    }

    /**
     * @return mixed
     */
    public function getManufactor()
    {
        return $this->_manufactor;
    }

    /**
     * @param mixed $_manufactor
     */
    public function setManufactor($_manufactor)
    {
        $this->_manufactor = $_manufactor;
    }

}