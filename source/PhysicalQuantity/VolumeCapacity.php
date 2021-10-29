<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\HasSIUnitsTrait;
use PhpUnitsOfMeasure\UnitOfMeasure;

class VolumeCapacity extends AbstractPhysicalQuantity
{
    use HasSIUnitsTrait;
    
    protected static $unitDefinitions;

    protected static function initialize()
    {
        // Liter per Charge
        $literPerCharge = UnitOfMeasure::nativeUnitFactory('l/charge');
        $literPerCharge->addAlias('L/charge');
        $literPerCharge->addAlias('liter per charge');
        $literPerCharge->addAlias('liters per charge');
        $literPerCharge->addAlias('litre per charge');
        $literPerCharge->addAlias('litres per charge');
        static::addUnit($literPerCharge);

        static::addMissingSIPrefixedUnits(
            $literPerCharge,
            1,
            '%pl/Charge',
            [
                '%pL/Charge',
                '%Pliter per Charge',
                '%Pliters per Charge',
                '%Plitre per Charge',
                '%Plitres per Charge'
            ]
        );

        // Gallon per Charge
        $newUnit = UnitOfMeasure::linearUnitFactory('gal/charge', 3.7854118);
        $newUnit->addAlias('gallon per charge');
        $newUnit->addAlias('gallons per charge');
        $newUnit->addAlias('us gal per charge');
        static::addUnit($newUnit);
    }
}
