<?php

namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\HasSIUnitsTrait;
use PhpUnitsOfMeasure\UnitOfMeasure;

class AreaFlow extends AbstractPhysicalQuantity
{
    use HasSIUnitsTrait;

    protected static $unitDefinitions;

    protected static function initialize()
    {
        // Square meter per second
        $squaremeterpersecond = UnitOfMeasure::nativeUnitFactory('m^2/s');
        $squaremeterpersecond->addAlias('m2/s');
        $squaremeterpersecond->addAlias('m²/s');
        $squaremeterpersecond->addAlias('square meter per second');
        $squaremeterpersecond->addAlias('square meters per second');
        $squaremeterpersecond->addAlias('square metre per second');
        $squaremeterpersecond->addAlias('square metres per second');
        static::addUnit($squaremeterpersecond);

        static::addMissingSIPrefixedUnits(
            $squaremeterpersecond,
            1,
            '%pm^2/s',
            [
                '%pm2/s',
                '%pm²/s',
                'square %Pmeter per second',
                'square %Pmeters per second',
                'square %Pmetre per second',
                'square %Pmetres per second',
            ],
            2 // square power factor
        );

        // square meter per minute
        $newUnit = UnitOfMeasure::linearUnitFactory('m^2/min', 1 / 60);
        $newUnit->addAlias('m2/min');
        $newUnit->addAlias('m²/min');
        $newUnit->addAlias('square meter per minute');
        $newUnit->addAlias('square meters per minute');
        static::addUnit($newUnit);

        // square meter per hour
        $newUnit = UnitOfMeasure::linearUnitFactory('m^2/h', 1 / 3600);
        $newUnit->addAlias('m2/h');
        $newUnit->addAlias('m²/h');
        $newUnit->addAlias('square meter per hour');
        $newUnit->addAlias('square meters per hour');
        static::addUnit($newUnit);

        // square foot per second
        $newUnit = UnitOfMeasure::linearUnitFactory('ft^2/s', pow(0.3048, 2));
        $newUnit->addAlias('ft2/s');
        $newUnit->addAlias('ft²/s');
        $newUnit->addAlias('square foot per second');
        $newUnit->addAlias('square feet per second');
        static::addUnit($newUnit);

        // square foot per minute
        $newUnit = UnitOfMeasure::linearUnitFactory('ft^2/min', pow(0.3048, 2) / 60);
        $newUnit->addAlias('ft2/min');
        $newUnit->addAlias('ft²/min');
        $newUnit->addAlias('square foot per minute');
        $newUnit->addAlias('square feet per minute');
        static::addUnit($newUnit);

        // square foot per hour
        $newUnit = UnitOfMeasure::linearUnitFactory('ft^2/h', pow(0.3048, 2) / 3600);
        $newUnit->addAlias('ft2/h');
        $newUnit->addAlias('ft²/h');
        $newUnit->addAlias('square foot per hour');
        $newUnit->addAlias('square feet per hour');
        static::addUnit($newUnit);

        /*
        // square inch per second
        $newUnit = UnitOfMeasure::linearUnitFactory('in^3', pow(0.0254, 3));
        $newUnit->addAlias('in²');
        $newUnit->addAlias('square inch per second');
        $newUnit->addAlias('square inches per second');
        static::addUnit($newUnit);

        // square yard per second
        $newUnit = UnitOfMeasure::linearUnitFactory('yd^3', pow(0.9144, 3));
        $newUnit->addAlias('yd²');
        $newUnit->addAlias('square yard per second');
        $newUnit->addAlias('square yards per second');
        static::addUnit($newUnit);

        // Cup
        $newUnit = UnitOfMeasure::linearUnitFactory('cup', 2.365882e-4);
        $newUnit->addAlias('cup');
        $newUnit->addAlias('cups');
        static::addUnit($newUnit);

        // teaspoon
        $newUnit = UnitOfMeasure::linearUnitFactory('tsp', 0.00000492892);
        $newUnit->addAlias('teaspoon');
        $newUnit->addAlias('teaspoons');
        static::addUnit($newUnit);

        // tablespoon
        $newUnit = UnitOfMeasure::linearUnitFactory('tbsp', 0.00001478676);
        $newUnit->addAlias('tablespoon');
        $newUnit->addAlias('tablespoons');
        static::addUnit($newUnit);

        // Quart
        $newUnit = UnitOfMeasure::linearUnitFactory('qt', 9.4635295e-4);
        $newUnit->addAlias('quart');
        $newUnit->addAlias('quarts');
        $newUnit->addAlias('qts');
        $newUnit->addAlias('liq qt');
        static::addUnit($newUnit);

        // Fluid Ounce
        $newUnit = UnitOfMeasure::linearUnitFactory('fl oz', 2.957353e-5);
        $newUnit->addAlias('fluid ounce');
        $newUnit->addAlias('fluid ounces');
        $newUnit->addAlias('fluid oz');
        $newUnit->addAlias('fl. oz.');
        $newUnit->addAlias('oz. fl.');
        static::addUnit($newUnit);

        // Pint
        $newUnit = UnitOfMeasure::linearUnitFactory('pt', 4.73176475e-4);
        $newUnit->addAlias('pint');
        $newUnit->addAlias('pints');
        $newUnit->addAlias('liq pt');
        static::addUnit($newUnit);
        */

    }
}
