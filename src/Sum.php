<?php
declare(strict_types=1);

namespace App;

class Sum implements Expression
{
    public function __construct(public Money $augend, public Money $addend)
    {
    }

    public function reduce(Bank $bank, $to): Money
    {
        $amount = $this->augend->reduce($bank, $to)->amount + $this->addend->reduce($bank, $to)->amount;

        return new Money($amount, $to);
    }

}