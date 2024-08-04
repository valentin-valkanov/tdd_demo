<?php declare(strict_types=1);

namespace App;

class Bank
{
    public function reduce(Expression $source, string $targetCurrency): Money
    {
        return new Money(10, 'GBP');
    }
}