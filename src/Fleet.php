<?php

namespace Space;

use Space\Contracts\IBaseVessel;
use Space\Contracts\ISupportVessel;
use Space\Contracts\IOffensiveVessel;
use Space\Vessels\Offensive\BattleShipVessel;

class Fleet
{
    /**
     * The fleet can not exceed this size, including the `$commandShip`.
     */
    const MAX_SIZE = 50;

    /**
     * The fleets commanding vessel.
     *
     * @var BattleShipVessel
     */
    private $commandShip;

    /**
     * The fleet has a number of fighting craft.
     *
     * @var IOffensiveVessel[]
     */
    private $fighters = [];

    /**
     * The fleet has a number of supporting craft.
     *
     * @var ISupportVessel[]
     */
    private $supports = [];

    /**
     * To create a new Fleet you must provide a commanding ship.
     *
     * @param BattleShipVessel $commandShip
     */
    public function __construct(BattleShipVessel $vessel)
    {
        $this->commandShip = $vessel;
    }

    /**
     * Used by `addFighter` & `addSupport` methods to ensure
     * the size of the fleet is not exceeded.
     *
     * @param  IBaseVessel $vessel The vessel to add to the fleet.
     * @return IBaseVessel         The vessel unmodified.
     * @throws \OutOfRangeException When the fleet has reached it's MAX_SIZE.
     */
    protected function ensureFleetSize(IBaseVessel $vessel)
    {
        if (count($this->fighters) + count($this->supports) + 1 > static::MAX_SIZE)
        {
            throw new \OutOfRangeException
            (
                'You can not add this $vessel to the fleet '.
                'as it has reached it`s maximum size of '.static::MAX_SIZE
            );
        }

        return $vessel;
    }

    /**
     * @return BattleShipVessel The fleets one and only commanding ship.
     */
    public function getCommandShip()
    {
        return $this->commandShip;
    }

    /**
     * @return IBaseVessel[] The entire fleet.
     */
    public function getAllVessels()
    {
        return array_merge
        (
            [$this->getCommandShip()],
            $this->getFighters(),
            $this->getSupports()
        );
    }

    /**
     * @return IOffensiveVessel[] The fleets fighter craft, including the $commandShip.
     */
    public function getFighters()
    {
        return array_merge
        (
            [$this->getCommandShip()],
            $this->fighters
        );
    }

    /**
     * @return ISupportVessel[] The fleets support craft.
     */
    public function getSupports()
    {
        return $this->supports;
    }

    /**
     * Adds a new OffensiveVessel to the fleets fighter list.
     *
     * @param IOffensiveVessel $vessel
     */
    public function addFighter(IOffensiveVessel $vessel)
    {
        $this->fighters[] = $this->ensureFleetSize($vessel);
    }

    /**
     * Adds a new SupportVessel to the fleets support list.
     *
     * @param ISupportVessel $vessel
     */
    public function addSupport(ISupportVessel $vessel)
    {
        $this->supports[] = $this->ensureFleetSize($vessel);
    }
}
