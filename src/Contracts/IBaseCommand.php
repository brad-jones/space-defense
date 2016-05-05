<?php

namespace Space\Contracts;

interface IBaseCommand
{
    /**
     * Set the location that a vessel will move to if passed this command.
     *
     * @param ICoOrdinate $coOrdinate
     */
    public function setCoOrdinate(ICoOrdinate $coOrdinate);

    /**
     * Returns the CoOrdinate.
     *
     * @return ICoOrdinate
     */
    public function getCoOrdinate();
}
