<?php declare(strict_types=1);

namespace App;

class Bank
{
    public function reduce(Expression $source, string $targetCurrency): Money
    {
        return $source->reduce($targetCurrency);
    }
}