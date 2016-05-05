<?php

namespace Space\Contracts;

interface IBaseVessel
{
    /**
     * Tells the vessel what to do next.
     *
     * @param IBaseCommand $command
     */
    public function setCommand(IBaseCommand $command);

    /**
     * Returns the last set command.
     *
     * @return IBaseCommand
     */
    public function getCommand();
}
