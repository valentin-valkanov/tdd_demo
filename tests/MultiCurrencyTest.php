<?php
declare(strict_types=1);


use App\GBP;
use App\Money;
use App\USD;
use PHPUnit\Framework\TestCase;

class MultiCurrencyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = Money::gbp(5);
        $this->assertEquals(Money::gbp(10), $five->times(2));
        $this->assertEquals(Money::gbp(15), $five->times(3));
    }

    public function testEquality(): void
    {
        $this->assertTrue((Money::gbp(5))->equals(Money::gbp(5)));
        $this->assertFalse((Money::gbp(5))->equals(Money::gbp(6)));
        $this->assertFalse((Money::usd(5))->equals(Money::gbp(5)));
    }

    public function testCurrency(): void
    {
        $this->assertEquals('GBP', Money::gbp(1)->currency());
        $this->assertEquals('USD', Money::usd(1)->currency());
    }
}