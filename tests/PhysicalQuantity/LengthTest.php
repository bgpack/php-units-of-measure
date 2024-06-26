<?php

namespace PhpUnitsOfMeasureTest\PhysicalQuantity;

use PhpUnitsOfMeasure\PhysicalQuantity\Length;

class LengthTest extends AbstractPhysicalQuantityTestCase
{
    protected $supportedUnitsWithAliases = [
        'm',
        'meter',
        'meters',
        'metre',
        'metres',
        'mmH2O'
        'Ym',
        'yottameter',
        'yottameters',
        'yottametre',
        'yottametres',
        'Zm',
        'zettameter',
        'zettameters',
        'zettametre',
        'zettametres',
        'Em',
        'exameter',
        'exameters',
        'exametre',
        'exametres',
        'Pm',
        'petameter',
        'petameters',
        'petametre',
        'petametres',
        'Tm',
        'terameter',
        'terameters',
        'terametre',
        'terametres',
        'Gm',
        'gigameter',
        'gigameters',
        'gigametre',
        'gigametres',
        'Mm',
        'megameter',
        'megameters',
        'megametre',
        'megametres',
        'km',
        'kilometer',
        'kilometers',
        'kilometre',
        'kilometres',
        'hm',
        'hectometer',
        'hectometers',
        'hectometre',
        'hectometres',
        'dam',
        'decameter',
        'decameters',
        'decametre',
        'decametres',
        'dm',
        'decimeter',
        'decimeters',
        'decimetre',
        'decimetres',
        'cm',
        'centimeter',
        'centimeters',
        'centimetre',
        'centimetres',
        'mm',
        'millimeter',
        'millimeters',
        'millimetre',
        'millimetres',
        'µm',
        'micrometer',
        'micrometers',
        'micrometre',
        'micrometres',
        'nm',
        'nanometer',
        'nanometers',
        'nanometre',
        'nanometres',
        'pm',
        'picometer',
        'picometers',
        'picometre',
        'picometres',
        'fm',
        'femtometer',
        'femtometers',
        'femtometre',
        'femtometres',
        'am',
        'attometer',
        'attometers',
        'attometre',
        'attometres',
        'zm',
        'zeptometer',
        'zeptometers',
        'zeptometre',
        'zeptometres',
        'ym',
        'yoctometer',
        'yoctometers',
        'yoctometre',
        'yoctometres',
        'ft',
        'foot',
        'feet',
        'in',
        'inch',
        'inches',
        'inH2O',
        'mi',
        'mile',
        'miles',
        'yd',
        'yard',
        'yards',
        'M',
        'NM',
        'nmi',
        'nautical mile',
        'mil',
        'AU',
        'au',
        'astronomical unit',
        'astronomical units',
        'ly',
        'LY',
        'light year',
        'light years',
        'pc',
        'parsec',
        'parsecs',
        'Ypc',
        'yottaparsec',
        'yottaparsecs',
        'Zpc',
        'zettaparsec',
        'zettaparsecs',
        'Epc',
        'exaparsec',
        'exaparsecs',
        'Ppc',
        'petaparsec',
        'petaparsecs',
        'Tpc',
        'teraparsec',
        'teraparsecs',
        'Gpc',
        'gigaparsec',
        'gigaparsecs',
        'Mpc',
        'megaparsec',
        'megaparsecs',
        'kpc',
        'kiloparsec',
        'kiloparsecs',
        'hpc',
        'hectoparsec',
        'hectoparsecs',
        'dapc',
        'decaparsec',
        'decaparsecs',
        'dpc',
        'deciparsec',
        'deciparsecs',
        'cpc',
        'centiparsec',
        'centiparsecs',
        'mpc',
        'milliparsec',
        'milliparsecs',
        'µpc',
        'microparsec',
        'microparsecs',
        'npc',
        'nanoparsec',
        'nanoparsecs',
        'ppc',
        'picoparsec',
        'picoparsecs',
        'fpc',
        'femtoparsec',
        'femtoparsecs',
        'apc',
        'attoparsec',
        'attoparsecs',
        'zpc',
        'zeptoparsec',
        'zeptoparsecs',
        'ypc',
        'yoctoparsec',
        'yoctoparsecs',

    ];

    protected function instantiateTestQuantity()
    {
        return new Length(1, 'm');
    }

    public function testToMillimeters()
    {
        $quantity = new Length(5, 'm');
        $this->assertEquals(5000, $quantity->toUnit('mm'));
    }

    public function testToMegameters()
    {
        $quantity = new Length(5, 'm');
        $this->assertEquals(5/1e6, $quantity->toUnit('Mm'));
    }

    public function testToInches()
    {
        $quantity = new Length(2, 'ft');
        $this->assertEquals(24, $quantity->toUnit('in'));
    }

    public function testToNauticalMiles()
    {
        $quantity = new Length(3704, 'm');
        $this->assertEquals(2, $quantity->toUnit('nmi'));
    }

    public function testToScandinavianMil()
    {
        $quantity = new Length(20000, 'm');
        $this->assertEquals(2, $quantity->toUnit('mil'));
    }

    public function testToAstronomicalUnit()
    {
        $quantity = new Length(150000000, 'km');
        $this->assertEquals(1.0026880683402668, $quantity->toUnit('AU'));
    }

    public function testToLightYear()
    {
        $quantity = new Length(150000000000000, 'km');
        $this->assertEquals(15.855012510369232, $quantity->toUnit('ly'));
    }

    public function testToParSec()
    {
        $quantity = new Length(150000000000000, 'km');
        $this->assertEquals(4.861168934166548, $quantity->toUnit('pc'));
    }

    public function testToMilliParSec()
    {
        $quantity = new Length(150000000000000, 'km');
        $this->assertEquals(4861.168934166548, $quantity->toUnit('mpc'));
    }
    public function testToMmH2O()
    {
        $quantity = new Length(5, 'inH2O');
        $this->assertEquals(127, $quantity->toUnit('mmH2O'));
    }

}
