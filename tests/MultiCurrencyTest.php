<?php
declare(strict_types=1);

use App\GBP;

class MultiCurrencyTest extends \PHPUnit\Framework\TestCase
{
    public function testMultiplication(): void
    {
        $five = new GBP(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testEquality()
    {
        $this->assertTrue((new GBP(5))->equals(new GBP(5)));
        $this->assertFalse((new GBP(5))->equals(new GBP(6)));
    }
}