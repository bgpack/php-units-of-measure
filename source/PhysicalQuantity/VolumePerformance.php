<?php

namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;

class VolumePerformance extends AbstractPhysicalQuantity
{
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

        // Cubic inch per revolution
        $newUnit = UnitOfMeasure::linearUnitFactory('in^3/1/min', pow(0.0254, 3));
        $newUnit->addAlias('in3/1/min');
        $newUnit->addAlias('in³/1/min');
        $newUnit->addAlias('in3/rpm');
        $newUnit->addAlias('in³/rpm');
        $newUnit->addAlias('cubic inch per revolution');
        $newUnit->addAlias('cubic inches per revolution');
        static::addUnit($newUnit);
    }
}
