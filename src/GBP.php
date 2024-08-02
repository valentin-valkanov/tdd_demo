<?php declare(strict_types=1);

namespace App;

class GBP extends Money
{
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): GBP
    {
        return new GBP($this->amount * $multiplier);
    }


}