<?php

namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;

class Torque extends AbstractPhysicalQuantity
{
    protected static $unitDefinitions;

    protected static function initialize()
    {
        // Newton meter
        $netwonMeter = UnitOfMeasure::nativeUnitFactory('Nm');
        $netwonMeter->addAlias('Newton meter');
        static::addUnit($netwonMeter);

        // US Foot-pounds-force
        $newUnit = UnitOfMeasure::linearUnitFactory('ft-lb', 1.3558);
        $newUnit->addAlias('ft-lbs');
        $newUnit->addAlias('ftlb');
        $newUnit->addAlias('ftlbs');
        static::addUnit($newUnit);
    }
}
