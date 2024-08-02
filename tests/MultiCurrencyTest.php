<?php
declare(strict_types=1);

use App\GBP;

class MultiCurrencyTest extends \PHPUnit\Framework\TestCase
{
    public function testMultiplication(): void
    {
        $five = new GBP(5);
        $this->assertEquals(new GBP(10), $five->times(2));
        $this->assertEquals(new GBP(15), $five->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue((new GBP(5))->equals(new GBP(5)));
        $this->assertFalse((new GBP(5))->equals(new GBP(6)));
    }
}