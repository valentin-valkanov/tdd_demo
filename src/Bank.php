<?php declare(strict_types=1);

namespace App;

class Bank
{
    private array $rates = [
//        'USDGBP' => 2,
//        'GBPGBP' => 1
    ];
    public function reduce(Expression $source, string $targetCurrency): Money
    {
        return $source->reduce($this, $targetCurrency);
    }

    public function addRate(string $from, string $to, float $rate): void
    {
        $this->rates = array_replace($this->rates, [$from . $to => $rate]);
    }

    public function rate(string $from, string $to): float
    {
        if($from === $to) {
            return 1;
        }
        $rate = $this->rates[$from . $to];
        return $rate;
    }
}