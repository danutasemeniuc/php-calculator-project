<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $result = $this->calculator->add(5, 3);
        $this->assertEquals(8, $result);
    }

    public function testAddNegativeNumbers()
    {
        $result = $this->calculator->add(-5, -3);
        $this->assertEquals(-8, $result);
    }

    public function testSubtract()
    {
        $result = $this->calculator->subtract(10, 4);
        $this->assertEquals(6, $result);
    }

    public function testMultiply()
    {
        $result = $this->calculator->multiply(6, 7);
        $this->assertEquals(42, $result);
    }

    public function testDivide()
    {
        $result = $this->calculator->divide(20, 4);
        $this->assertEquals(5, $result);
    }

    public function testDivideByZeroThrowsException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->divide(10, 0);
    }

    public function testPower()
    {
        $result = $this->calculator->power(2, 3);
        $this->assertEquals(8, $result);
    }

    public function testAverage()
    {
        $result = $this->calculator->average([10, 20, 30, 40]);
        $this->assertEquals(25, $result);
    }

    public function testAverageEmptyArrayThrowsException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->average([]);
    }
}