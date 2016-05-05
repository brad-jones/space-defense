<?php

namespace Space\Vessels\Offensive;

use Space\Contracts\IOffensiveVessel;
use Space\Contracts\IAttackCommand;

class OffensiveVessel extends BaseVessel implements IOffensiveVessel
{
    /**
     * @inheritdoc
     */
    public function setCommand(IAttackCommand $command)
    {
        $this->command = $command;
    }
}
