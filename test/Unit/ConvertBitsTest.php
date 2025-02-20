<?php

namespace BitWasp\Test\Unit\Bech32;

use BitWasp\Test\Bech32\TestCase;

class ConvertBitsTest extends TestCase
{
    /**
     * @expectedException \BitWasp\Bech32\Exception\Bech32Exception
     * @expectedExceptionMessage Invalid value for convert bits
     */
    public function testInvalidCharValue()
    {
        $this->expectException(\BitWasp\Bech32\Exception\Bech32Exception::class);
        $this->expectExceptionMessage("Invalid value for convert bits");
        \Bitwasp\Bech32\convertBits([2 << 29], 1, 8, 5, true);
    }
}
