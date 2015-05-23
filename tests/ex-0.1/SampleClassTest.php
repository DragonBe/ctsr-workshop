<?php
namespace In2it\Test\Workshop\Ctsr;

use In2it\Workshop\Ctsr\SampleClass;

class SampleClassTest extends \PHPUnit_Framework_TestCase
{
    public function testSomethingReturnsGreeting()
    {
        $sampleClass = new SampleClass();
        $this->assertSame('Hello World!', $sampleClass->doSomething());
    }
}