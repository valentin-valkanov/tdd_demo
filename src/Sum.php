<?php
declare(strict_types=1);

namespace App;

class Sum implements Expression
{
    public function __construct(public Money $augend, public Money $addend)
    {
    }

}