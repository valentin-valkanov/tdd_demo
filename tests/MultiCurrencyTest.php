<?php
declare(strict_types=1);

use App\GBP;

class MultiCurrencyTest extends \PHPUnit\Framework\TestCase
{
    public function testMultiplication(): void
    {
        $five = new GBP(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}