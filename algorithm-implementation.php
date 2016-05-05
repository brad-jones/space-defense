<?php

require('vendor/autoload.php');

use Space\Fleet;
use Space\CoOrdinate;
use Space\MedicalUnit;
use Space\Commands\BaseCommand;
use Space\Commands\AttackCommand;
use Space\Vessels\Offensive\BattleShipVessel;
use Space\Vessels\Support\CargoVessel;

// Create some random positions
$randomPositions = [];
for ($i = 1; $i <= 50; $i++)
{
    $randomPositions[] = new CoOrdinate(rand(0, 100), rand(0, 100));
}

// Create the commander of the fleet
$commander = new BattleShipVessel();
$cmd = new AttackCommand();
$cmd->setCoOrdinate($randomPositions[0]);
$commander->setCommand($cmd);

// Create the fleet
$fleet = new Fleet($commander);

// Add some fighters
for ($i = 1; $i <= 24; $i++)
{
    $fighter = new BattleShipVessel();
    $cmd = new AttackCommand();
    $cmd->setCoOrdinate($randomPositions[$i+1]);
    $fighter->setCommand($cmd);

    $fleet->addFighter($fighter);
}

// Add some supports
for ($i = 1; $i <= 25; $i++)
{
    $support = new CargoVessel(new MedicalUnit);
    $cmd = new BaseCommand();
    $cmd->setCoOrdinate($randomPositions[$i+24]);
    $support->setCommand($cmd);

    $fleet->addSupport($support);
}

// At this point the fleet is now randomly spread across the 100x100 universe.
// Next step is to pair our ships together, one fighter to every support.

$pairs = [];
$fighters = $fleet->getFighters();
$supports = $fleet->getSupports();
foreach ($fighters as $no => $fighter)
{
    $pairs[] =
    [
        $fighter,
        $supports[$no]
    ];
}

// We now have pairs of ships, this takes no consideration for their current location, in short I ran out of time.
// Lets move the ships to be next to each other. Also does not account for ships being in the same location.

foreach ($pairs as $pair)
{
    $cmd = new BaseCommand();
    $cmd->setCoOrdinate(new CoOrdinate($pair[1]->getCommand()->getCoOrdinate()->getXPos()+1, $pair[1]->getCommand()->getCoOrdinate()->getYPos()));
    $pair[0]->setCommand($cmd);
}

print_r($pairs);
