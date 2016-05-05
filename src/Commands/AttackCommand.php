<?php

namespace Space\Commands;

use Space\Contracts\IAttackCommand;

class AttackCommand extends BaseCommand implements IAttackCommand
{
    /**
     * If set to true this will command an OffensiveVessel to raise it's shields
     *
     * @var bool
     */
    private $raiseShields = false;

    /**
     * If set to true this will command an OffensiveVessel to fire it's canons.
     *
     * @var bool
     */
    private $fireCanons = false;

    /**
     * @inheritdoc
     */
    public function setRaiseShields(bool $value)
    {
        $this->raiseShields = $value;
    }

    /**
     * @inheritdoc
     */
    public function setFireCanons(bool $value)
    {
        $this->fireCanons = $value;
    }
}
