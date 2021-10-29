<?php

namespace PhpUnitsOfMeasureTest\PhysicalQuantity;

use PhpUnitsOfMeasure\PhysicalQuantity\Mass;

class MassTest extends AbstractPhysicalQuantityTestCase
{
    protected $supportedUnitsWithAliases = [
        'g/s',
    ];

    protected function instantiateTestQuantity()
    {
        return new Mass(1, 'kg/s');
    }

    public function testToGramsPerSecond()
    {
        $quantity = new Mass(5, 'kg/s');
        $this->assertEquals(5000, $quantity->toUnit('g/s'));
    }
}
