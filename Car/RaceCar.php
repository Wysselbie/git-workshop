<?php


class RaceCar extends Car
{
    protected $_hp;
    protected $_maxSpeed;

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->_hp;
    }

    /**
     * @param mixed $hp
     */
    public function setHp($hp)
    {
        $this->_hp = $hp;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->_maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->_maxSpeed = $maxSpeed;
    }


}