<?php

namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\HasSIUnitsTrait;
use PhpUnitsOfMeasure\UnitOfMeasure;

class VolumePerformance extends AbstractPhysicalQuantity
{
    use HasSIUnitsTrait;

    protected static $unitDefinitions;

    protected static function initialize()
    {
        // Cubic meter per revolution
        $cubicmeterPerRevolution = UnitOfMeasure::nativeUnitFactory('m^3/1/min');
        $cubicmeterPerRevolution->addAlias('m3/1/min');
        $cubicmeterPerRevolution->addAlias('m³/1/min');
        $cubicmeterPerRevolution->addAlias('m3/rpm');
        $cubicmeterPerRevolution->addAlias('m³/rpm');
        $cubicmeterPerRevolution->addAlias('cubicmeter per revolution');
        $cubicmeterPerRevolution->addAlias('cubicmeters per revolution');
        static::addUnit($cubicmeterPerRevolution);

        static::addMissingSIPrefixedUnits(
            $cubicmeterPerRevolution,
            1,
            '%pm^3/1/min',
            [
                '%pm3/1/min',
                '%pm³/1/min',
                'cubic %Pmeter per revolution',
                'cubic %Pmeters per revolution',
                'cubic %Pmetre per revolution',
                'cubic %Pmetres per revolution',
            ],
            3 // cubic power factor
        );

        // Cubic inch per revolution
        $newUnit = UnitOfMeasure::linearUnitFactory('inch^3/1/min', pow(0.0254, 3));
        $newUnit->addAlias('inch3/1/min');
        $newUnit->addAlias('inch³/1/min');
        $newUnit->addAlias('inch3/rpm');
        $newUnit->addAlias('inch³/rpm');
        $newUnit->addAlias('cubic inch per revolution');
        $newUnit->addAlias('cubic inches per revolution');
        static::addUnit($newUnit);
    }
}
