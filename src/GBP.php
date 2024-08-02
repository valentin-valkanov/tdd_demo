<?php declare(strict_types=1);

namespace App;

class GBP
{
    public ?float $amount = null;
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): void
    {
        $this->amount = $this->amount * $multiplier;
    }
}