<?php
namespace In2it\Test\Workshop\Ctsr;

use In2it\Workshop\Ctsr\CronManager;

class CronManagerTest extends \PHPUnit_Framework_TestCase
{

    public function testCronManagerCanAddAnEntry()
    {
        $entry = new \stdClass();
        $cronman = new CronManager();
        $cronman->addEntry($entry);

        $this->assertCount(1, $cronman);
    }
}