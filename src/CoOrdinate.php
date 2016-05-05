<?php

namespace Space;

use Space\Contracts\ICoOrdinate;

class CoOrdinate implements ICoOrdinate
{
    /**
     * The CoOrdinate's X position.
     *
     * @var int
     */
    private $x;

    /**
     * The CoOrdinate's Y position.
     *
     * @var int
     */
    private $y;

    /**
     * To create a new CoOrdinate you mayt suuply it's starting position.
     *
     * @param int $x A number from 0 - 100, defaults to 0.
     * @param int $y A number from 0 - 100, defaults to 0.
     */
    public function __construct(int $x = 0, int $y = 0)
    {
        $this->setXPos($x)->setYPos($y);
    }

    /**
     * Our version of "space" is only 100x100,
     * this will ensure we do not go past these bounds.
     *
     * @param  int $pos             A number to validate.
     * @return int                  If valid the same number that was provided.
     * @throws \OutOfRangeException When the provided number is < 0 or > 100.
     */
    protected function validatePos(int $pos)
    {
        if ($pos < 0)
        {
            throw new \OutOfRangeException
            (
                '$pos must be greater than or equal to 0.'
            );
        }

        if ($pos > 100)
        {
            throw new \OutOfRangeException
            (
                '$pos must be less than or equal to 100.'
            );
        }

        return $pos;
    }

    /**
     * @inheritdoc
     */
    public function setXPos(int $pos)
    {
        $this->x = $this->validatePos($pos);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getXPos()
    {
        return $this->x;
    }

    /**
     * @inheritdoc
     */
    public function setYPos(int $pos)
    {
        $this->y = $this->validatePos($pos);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getYPos()
    {
        return $this->y;
    }
}
