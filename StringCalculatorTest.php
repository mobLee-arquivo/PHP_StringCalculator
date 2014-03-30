<?php

require_once('StringCalculator.php');

class StringCalculatorTest extends PHPUnit_Framework_TestCase
{
    protected $stringCalculator;

    protected function setUp()
    {
        $this->stringCalculator = new StringCalculator();
    }

    public function testEmptyStringReturnsZero()
    {
        $sum = $this->stringCalculator->add('');
        $this->assertEquals(0, $sum);
    }

    public function testOneNumberStringReturnsSameNumber()
    {
        $sum = $this->stringCalculator->add('1');
        $this->assertEquals(1, $sum);
    }

    public function testTwoNumbersStringReturnsNumbersSum()
    {
        $sum = $this->stringCalculator->add('1,2');
        $this->assertEquals(3, $sum);
    }

    protected function tearDown()
    {
        unset($this->stringCalculator);
    }

}
 