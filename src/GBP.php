<?php declare(strict_types=1);

namespace App;

class GBP extends Money
{

    public function times(int $multiplier): Money
    {
        return Money::gbp($this->amount * $multiplier);
    }
}