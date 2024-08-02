<?php declare(strict_types=1);

namespace App;

class Money
{
    protected ?float $amount = null;

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount;
    }
}