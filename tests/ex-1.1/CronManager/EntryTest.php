<?php
namespace In2it\Test\Workshop\Ctsr;

use In2it\Workshop\Ctsr\CronManager\Entry;

class EntryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::getMinutes
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::getHours
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::getDom
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::getMonths
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::getDow
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::getCommand
     */
    public function testEntryContainsAllFields()
    {
        $entry = new Entry();

        $this->assertCount(0, $entry->getMinutes());
        $this->assertCount(0, $entry->getHours());
        $this->assertCount(0, $entry->getDom());
        $this->assertCount(0, $entry->getMonths());
        $this->assertCount(0, $entry->getDow());
        $this->assertSame('', $entry->getCommand());
    }

    /**
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::setMinutes
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::setHours
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::setDom
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::setMonths
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::setDow
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::setCommand
     */
    public function testEntryCanSetEntryElements()
    {
        $assetCollection = $this->getMock(
            'In2it\\Workshop\\Ctsr\\CronManager\\AssetCollection'
        );
        $entry = new Entry();

        $entry->setMinutes($assetCollection);
        $this->assertInstanceOf(
            'In2it\\Workshop\\Ctsr\\CronManager\\AssetCollection',
            $entry->getMinutes()
        );
        $entry->setHours($assetCollection);
        $this->assertInstanceOf(
            'In2it\\Workshop\\Ctsr\\CronManager\\AssetCollection',
            $entry->getHours()
        );
        $entry->setDom($assetCollection);
        $this->assertInstanceOf(
            'In2it\\Workshop\\Ctsr\\CronManager\\AssetCollection',
            $entry->getDom()
        );
        $entry->setMonths($assetCollection);
        $this->assertInstanceOf(
            'In2it\\Workshop\\Ctsr\\CronManager\\AssetCollection',
            $entry->getMonths()
        );
        $entry->setDow($assetCollection);
        $this->assertInstanceOf(
            'In2it\\Workshop\\Ctsr\\CronManager\\AssetCollection',
            $entry->getDow()
        );

        $command = $this->getMock(
            'In2it\\Workshop\\Ctsr\\CronManager\\Command'
        );
        $entry->setCommand($command);
        $this->assertInstanceOf(
            'In2it\\Workshop\\Ctsr\\CronManager\\Command',
            $entry->getCommand()
        );
    }
}