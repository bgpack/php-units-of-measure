<?php

namespace PhpUnitsOfMeasureTest\PhysicalQuantity;

use PhpUnitsOfMeasure\PhysicalQuantity\MassFlow;

class MassFlowTest extends AbstractPhysicalQuantityTestCase
{
    protected $supportedUnitsWithAliases = [
        'g/s',
    ];

    protected function instantiateTestQuantity()
    {
        return new MassFlow(1, 'kg/s');
    }

    public function testToGramsPerSecond()
    {
        $quantity = new MassFlow(5, 'kg/s');
        $this->assertEquals(5000, $quantity->toUnit('g/s'));
    }
}
