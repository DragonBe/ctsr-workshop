<?php
namespace In2it\Test\Workshop\Ctsr;

use In2it\Workshop\Ctsr\CronManager\Command;

class CommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers In2it\Workshop\Ctsr\CronManager\Command::setCommand
     * @covers In2it\Workshop\Ctsr\CronManager\Command::getCommand
     */
    public function testCommandCanBeGivenAString()
    {
        $string = '/bin/sh /path/to/foo.sh 2>&1';
        $command = new Command();
        $command->setCommand($string);

        $this->assertSame($string, $command->getCommand());
    }

    /**
     * @covers In2it\Workshop\Ctsr\CronManager\Command::__construct
     */
    public function testCommandAcceptsStringAtConstruct()
    {
        $string = '/bin/sh /path/to/foo.sh 2>&1';

        $command = new Command($string);
        $this->assertSame($string, $command->getCommand());
    }
}