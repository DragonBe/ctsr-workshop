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

    public function entryDataProvider()
    {
        return array (
            array (
                array (
                    'minutes' => range(0, 59),
                    'hours' => range(0, 23),
                    'dom' => range(1, 31),
                    'months' => range(1, 12),
                    'dow' => range(0, 7),
                    'command' => 'echo test',
                ),
            ),
            array (
                array (
                    'minutes' => range(0, 59, 2),
                    'hours' => range(0, 23, 2),
                    'dom' => range(1, 31, 5),
                    'months' => range(1, 12, 3),
                    'dow' => range(0, 7, 2),
                    'command' => 'echo test',
                ),
            ),
        );
    }
    /**
     * @dataProvider entryDataProvider
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::__construct
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::populate
     * @covers In2it\Workshop\Ctsr\CronManager\Entry::safeSet
     */
    public function testProcessingCronEntries($entryData)
    {
        $entry = new Entry($entryData);

        $this->assertCount(count($entryData['minutes']), $entry->getMinutes());
        $this->assertCount(count($entryData['hours']), $entry->getHours());
        $this->assertCount(count($entryData['dom']), $entry->getDom());
        $this->assertCount(count($entryData['months']), $entry->getMonths());
        $this->assertCount(count($entryData['dow']), $entry->getDow());
        $this->assertEquals($entryData['command'], $entry->getCommand());
    }
}