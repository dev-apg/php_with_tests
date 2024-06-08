// tests/CalculatorTest.php
<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }

    public function testSubtract() {
        $calculator = new Calculator();
        $this->assertEquals(0, $calculator->subtract(2, 2));
    }
}
