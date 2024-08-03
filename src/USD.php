<?php declare(strict_types=1);

namespace App;
class USD extends Money
{

    public function times(int $multiplier): Money
    {
        return Money::usd($this->amount * $multiplier);
    }
}