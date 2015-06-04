<?php
namespace In2it\Test\Workshop\Ctsr;

use In2it\Workshop\Ctsr\CronManager;

class CronManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers In2it\Workshop\Ctsr\CronManager::addEntry
     * @expectedException \PHPUnit_Framework_Error
     */
    public function testCronManagerRequiresEntryObjects()
    {
        $entry = new \stdClass();
        $cronman = new CronManager();
        $cronman->addEntry($entry);
    }

    /**
     * @covers In2it\Workshop\Ctsr\CronManager::addEntry
     */
    public function testCronManagerCanAddAnEntry()
    {
        $entry = $this->getMock(
            'In2it\\Workshop\\Ctsr\\CronManager\\Entry'
        );
        $cronman = new CronManager();
        $cronman->addEntry($entry);

        $this->assertCount(1, $cronman);
    }
}