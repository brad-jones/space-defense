<?php

namespace Space\Contracts;

interface ICoOrdinate
{
    /**
     * Sets the CoOrdinate's X Position.
     *
     * @param int $pos A number from 0 - 100
     * @return static You may method chain if you wish.
     */
    public function setXPos(int $pos);

    /**
     * Gets the current CoOrdinate's X Position.
     *
     * @return int A number from 0 - 100
     */
    public function getXPos();

    /**
     * Sets the CoOrdinate's Y Position.
     *
     * @param int $pos A number from 0 - 100
     * @return static You may method chain if you wish.
     */
    public function setYPos(int $pos);

    /**
     * Gets the current CoOrdinate's Y Position.
     *
     * @return int A number from 0 - 100
     */
    public function getYPos();
}
