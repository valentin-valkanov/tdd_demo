<?php declare(strict_types=1);

namespace App;

class GBP
{
    private ?float $amount = null;
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): GBP
    {
        return new GBP($this->amount * $multiplier);
    }

    public function equals(GBP $gbp): bool
    {
        return $this->amount === $gbp->amount;
    }
}