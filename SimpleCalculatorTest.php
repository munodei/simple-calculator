<?php

require_once("SimpleCalculator.php");

use PHPUnit\Framework\TestCase;

class SimpleCalculatorTest extends TestCase
{
    public function testAddition()
    {
        $this->assertEquals(2, SimpleCalculator::calculate("1 + 1"));
    }

    public function testSubtraction()
    {
        $this->assertEquals(1, SimpleCalculator::calculate("100 - 99"));
    }

    public function testAdditionsAndSubtractions()
    {
        $this->assertEquals(50,  SimpleCalculator::calculate("50 - 45 + 45"));
        $this->assertEquals(80,  SimpleCalculator::calculate("1 + 5 + 100 - 26"));
        $this->assertEquals(2,  SimpleCalculator::calculate("1 + 1 + 1 - 1 - 1 + 1"));
    }

    public function testNegativeResult()
    {
        $this->assertEquals(-100, SimpleCalculator::calculate("100 - 200"));
    }
}
