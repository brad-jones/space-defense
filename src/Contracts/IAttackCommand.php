<?php

namespace Space\Contracts;

interface IAttackCommand
{
    /**
     * Tells an OffensiveVessel to raise it's shields if passed this command.
     *
     * @param bool $value True would mean shields are raised,
     *                    False would mean shields are lowered.
     */
    public function setRaiseShields(bool $value);

    /**
     * Tells an OffensiveVessel to fire it's canons if passed this command.
     *
     * @param bool $value True would mean canons are fired,
     *                    False would mean canons are not fired.
     */
    public function setFireCanons(bool $value);
}
