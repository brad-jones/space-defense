<?php

namespace Space\Vessels\Support;

use Space\Vessels\BaseVessel;
use Space\Contracts\ISupportVessel;
use Space\Contracts\IMedicalUnit;
use Space\Contracts\IOrder;

class SupportVessel extends BaseVessel implements ISupportVessel
{
    /**
     * Each support vessel houses a medical unit for emergencies.
     *
     * @var IMedicalUnit
     */
    private $medicalUnit;

    /**
     * Each support vessel has a list of orders it needs to carry out.
     *
     * @var IOrder[]
     */
    private $orders = [];

    /**
     * Each support vessel must carry a medical unit.
     *
     * @param IMedicalUnit $medicalUnit
     */
    public function __construct(IMedicalUnit $medicalUnit)
    {
        $this->setMedicalUnit($medicalUnit);
    }

    /**
     * @inheritdoc
     */
    public function setMedicalUnit(IMedicalUnit $medicalUnit)
    {
        $this->medicalUnit = $medicalUnit;
    }

    /**
     * @inheritdoc
     */
    public function addOrder(IOrder $order)
    {
        $this->orders = $order;
    }
}
