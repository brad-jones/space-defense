<?php

namespace Space\Commands;

use Space\CoOrdinate;
use Space\Contracts\IBaseCommand;
use Space\Contracts\ICoOrdinate;

class BaseCommand implements IBaseCommand
{
    /**
     * This is the location that a vessel will move to if passed this command.
     *
     * > NOTE: A null value would mean "do not move".
     *
     * @var null|ICoOrdinate
     */
    private $coOrdinate;

    /**
     * @inheritdoc
     */
    public function setCoOrdinate(ICoOrdinate $coOrdinate)
    {
        $this->coOrdinate = $coOrdinate;
    }

    /**
     * @inheritdoc
     */
    public function getCoOrdinate()
    {
        return $this->coOrdinate;
    }
}
