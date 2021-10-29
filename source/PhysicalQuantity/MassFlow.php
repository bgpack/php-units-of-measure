<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\HasSIUnitsTrait;
use PhpUnitsOfMeasure\UnitOfMeasure;

class MassFlow extends AbstractPhysicalQuantity
{
    use HasSIUnitsTrait;

    protected static $unitDefinitions;

    protected static function initialize()
    {
        // Kilogram per second
        $kilogrampersecond = UnitOfMeasure::nativeUnitFactory('kg/s');
        $kilogrampersecond->addAlias('kilogram per second');
        $kilogrampersecond->addAlias('kilograms per second');
        static::addUnit($kilogrampersecond);

        static::addMissingSIPrefixedUnits(
            $kilogrampersecond,
            1,
            '%pkm/s',
            [
                '%pkm/s',
                '%Pkilometer per second',
                '%Pkilometers per second',
                '%Pkilometre per second',
                '%Pkilometres per second',
            ]
        );

        // gram per s
        $newUnit = UnitOfMeasure::linearUnitFactory('g/s', 1e-3);
        $newUnit->addAlias('gram per second');
        $newUnit->addAlias('grams per second');
        static::addUnit($newUnit);

        // kilogram per minute
        $newUnit = UnitOfMeasure::linearUnitFactory('kg/min', 1 / 60);
        $newUnit->addAlias('kilogram per minute');
        $newUnit->addAlias('kilograms per minute');
        static::addUnit($newUnit);

        // kilogram per hour
        $newUnit = UnitOfMeasure::linearUnitFactory('kg/h', 1 / 3600);
        $newUnit->addAlias('kilogram per hour');
        $newUnit->addAlias('kilogram per hour');
        static::addUnit($newUnit);
    }
}
