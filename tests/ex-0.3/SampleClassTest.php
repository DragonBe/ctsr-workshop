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

    public function testSomethingReturnsArgument()
    {
        $sampleClass = new SampleClass();
        $argument = 'Class';
        $this->assertSame(
            sprintf('Hello %s!', $argument),
            $sampleClass->doSomething($argument)
        );
    }
}