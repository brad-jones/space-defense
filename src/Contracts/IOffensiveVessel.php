<?php

namespace Space\Contracts;

interface IOffensiveVessel
{
    /**
     * Tells the OffensiveVessel what to do next.
     *
     * @param IAttackCommand $command [description]
     */
    public function setCommand(IAttackCommand $command);
}
