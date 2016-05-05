<?php

namespace Space\Vessels;

use Space\Contracts\IBaseVessel;
use Space\Contracts\IBaseCommand;

class BaseVessel implements IBaseVessel
{
    /**
     * This is where we store the last command that was given to this vessel.
     *
     * @var IBaseCommand
     */
    private $command;

    /**
     * @inheritdoc
     */
    public function setCommand(IBaseCommand $command)
    {
        $this->command = $command;
    }
}
