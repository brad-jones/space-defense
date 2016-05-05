<?php

namespace Space\Contracts;

interface ICommand
{
    /**
     * Set the location that a vessel will move to if passed this command.
     *
     * @param ICoOrdinate $coOrdinate
     */
    public function setCoOrdinate(ICoOrdinate $coOrdinate);
}
