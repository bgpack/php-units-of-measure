<?php

namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\HasSIUnitsTrait;
use PhpUnitsOfMeasure\UnitOfMeasure;

class FuelConsumption extends AbstractPhysicalQuantity
{
    use HasSIUnitsTrait;

    protected static $unitDefinitions;

    protected static function initialize()
    {
        // Gram per kilo Watt hour
        $fuelConsumption  = UnitOfMeasure::nativeUnitFactory('g/kWh');
        $fuelConsumption ->addAlias('gram per kilo Watt hour');
        $fuelConsumption ->addAlias('grams per kilo Watt hour');
        static::addUnit($fuelConsumption );

        static::addMissingSIPrefixedUnits(
            $fuelConsumption ,
            1,
            '%pg/kWh',
            [
                '%Pgram per kilo Watt hour',
                '%Pgrams per kilo Watt hour',
            ]
        );

        // Pound per kilo Watt hour
        $newUnit = UnitOfMeasure::linearUnitFactory('lb/kWh', 453.59237);
        $newUnit->addAlias('lbs/kWh');
        $newUnit->addAlias('pound per kilo Watt hour');
        $newUnit->addAlias('pounds per kilo Watt hour');
        static::addUnit($newUnit);
    }
}
