<?php
declare(strict_types=1);

namespace App;

class Money implements Expression
{
    protected string $currency;
    public ?float $amount = null;
    public function __construct(float $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }
    public function plus(Expression $addend): Expression
    {
//        return new Money($this->amount + $addend->amount, $this->currency);
        return new Sum($this, $addend);
    }

    public function times(int $multiplier): Expression
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }
    public function currency(): string
    {
        return $this->currency;
    }

    public function equals(Money $money): bool
    {
        return $this->currency === $money->currency
            && $this->amount === $money->amount;
    }

    public static function gbp(float $amount): Money
    {
        return new Money($amount, 'GBP');
    }

    public static function usd(float $amount): Money
    {
        return new Money($amount, 'USD');
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $rate = $bank->rate($this->currency, $to);

        return new Money($this->amount / $rate, $to);
    }
}