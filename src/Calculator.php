<?php

namespace App;

class Calculator
{
    public function sum(int $firstValue, int $secondValue ): int 
    {
        return $firstValue + $secondValue;
    }

    public function multiplication(int $firstValue, int $secondValue ): int 
    {
        return $firstValue * $secondValue;
    }

    public function isEven(int $value): bool
    {
        return $value % 2 === 0;
    }
}