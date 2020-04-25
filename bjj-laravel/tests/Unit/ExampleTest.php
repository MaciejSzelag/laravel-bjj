<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testAdding()
    {
        $a = 2;
        $b = 3;

        $result = $a + $b;
        $this->assertEquals(5, $result);
    }

    public function testDivding()
    {
        $a = 21;
        $b = 3;

        $result = $a / $b;
        $this->assertEquals(7, $result, 'This should equal 7 for test dividing');
    }
}
