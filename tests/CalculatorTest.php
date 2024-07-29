<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMultiplication(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 40;

        //Act
        $calculator = new Calculator();
        $multiplication = $calculator->multiplication($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $multiplication, 
            "La méthode multiplication() ne fonctionne plus :-("
        );
    }

    public function testIsEven(): void
    {
        //Arrange
        $value = 5;
        $expectedResult = false;

        //Act
        $calculator = new Calculator();
        $isEven = $calculator->isEven($value);
        
        //Assert
        // Test pour un nombre impair
        $this->assertFalse($isEven, $expectedResult, 
            "Le nombre $value devrait être impair"
        );
    }
}