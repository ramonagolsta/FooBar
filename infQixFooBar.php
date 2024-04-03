<?php

use PHPUnit\Framework\TestCase;

require_once 'vendor/autoload.php';

require 'infQixFooBar.php'; 

class InfQixFooTest extends TestCase
{
    public function testMultiplesOnly()
    {
        $this->assertEquals('Inf', infqixfoo(8)); 
        $this->assertEquals('Qix', infqixfoo(14)); 
        $this->assertEquals('Foo', infqixfoo(9)); 
        $this->assertEquals('Inf; Qix; Foo', infqixfoo(24)); 
    }

    public function testOccurrencesOnly()
    {
        $this->assertEquals('Foo', infqixfoo(3)); 
        $this->assertEquals('Inf', infqixfoo(8)); 
        $this->assertEquals('Qix', infqixfoo(7)); 
        $this->assertEquals('Inf; Qix; Foo', infqixfoo(738)); 
    }

    public function testMultiplesAndOccurrences()
    {
        $this->assertEquals('Inf; Qix; Foo', infqixfoo(738)); 
        $this->assertEquals('Inf; Qix', infqixfoo(728)); 
        $this->assertEquals('Qix; Foo', infqixfoo(372)); 
    }
}
