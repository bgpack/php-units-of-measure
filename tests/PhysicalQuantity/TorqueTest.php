<?php

namespace PhpUnitsOfMeasureTest\PhysicalQuantity;

use PhpUnitsOfMeasure\PhysicalQuantity\Torque;

class TorqueTest extends AbstractPhysicalQuantityTestCase
{
    protected $supportedUnitsWithAliases = [
        'Nm',
        'ftlb',
        'ft-lb',
        'ftlbs',
        'ft-lbs',
    ];

    protected function instantiateTestQuantity()
    {
        return new Torque(1, 'Nm');
    }

    public function testToFeetPoundForce()
    {
        $value = new Torque(1000, 'Nm');
        $this->assertEquals(0.7376, $value->toUnit('ft-lbs'));
    }

}
