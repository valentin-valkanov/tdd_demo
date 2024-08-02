<?php
declare(strict_types=1);


use App\GBP;
use App\USD;
use PHPUnit\Framework\TestCase;

class MultiCurrencyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new GBP(5);
        $this->assertEquals(new GBP(10), $five->times(2));
        $this->assertEquals(new GBP(15), $five->times(3));
    }

    public function testEquality(): void
    {
        $this->assertTrue((new GBP(5))->equals(new GBP(5)));
        $this->assertFalse((new GBP(5))->equals(new GBP(6)));
        $this->assertTrue((new USD(5))->equals(new USD(5)));
        $this->assertFalse((new USD(5))->equals(new USD(6)));
        $this->assertFalse((new USD(5))->equals(new GBP(5)));
    }

    public function testUSDMultiplication(): void
    {
        $five = new USD(5);
        $this->assertEquals(new USD(10), $five->times(2));
        $this->assertEquals(new USD(15), $five->times(3));
    }
}