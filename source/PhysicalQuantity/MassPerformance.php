<?php

namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;

class MassPerformance extends AbstractPhysicalQuantity
{
    protected static $unitDefinitions;

    protected static function initialize()
    {
        // ton per hour
        $tonnePerHour = UnitOfMeasure::nativeUnitFactory('t/h');
        $tonnePerHour->addAlias('T/h');
        $tonnePerHour->addAlias('ton per hour');
        $tonnePerHour->addAlias('tons per hour');
        $tonnePerHour->addAlias('tonne per hour');
        $tonnePerHour->addAlias('tonnes per hour');
        static::addUnit($tonnePerHour);

        // US short Ton
        $newUnit = UnitOfMeasure::linearUnitFactory('ust/h', 453.59237 * 2);
        $newUnit->addAlias('us short ton per hour');
        $newUnit->addAlias('us short tons per hour');
        static::addUnit($newUnit);
    }
}
