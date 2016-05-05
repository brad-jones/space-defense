<?php

namespace Space\Contracts;

interface ISupportVessel
{
    /**
     * Replaces a support vessels's medical unit.
     *
     * @param IMedicalUnit $medicalUnit
     */
    public function setMedicalUnit(IMedicalUnit $medicalUnit);

    /**
     * Adds a new order to the support vessels's order list.
     *
     * @param IOrder $order
     */
    public function addOrder(IOrder $order);
}
