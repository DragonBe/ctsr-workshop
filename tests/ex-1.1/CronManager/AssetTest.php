<?php
namespace In2it\Test\Workshop\Ctsr;

use In2it\Workshop\Ctsr\CronManager\Asset;

class AssetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers In2it\Workshop\Ctsr\CronManager\Asset::setValue
     * @covers In2it\Workshop\Ctsr\CronManager\Asset::getValue
     */
    public function testAssetCanContainValueAndLabel()
    {
        $asset = new Asset();
        $asset->setValue(1);

        $this->assertSame(1, $asset->getValue());
    }

    /**
     * @covers In2it\Workshop\Ctsr\CronManager\Asset::__construct
     */
    public function testAssetCanBeSetAtConstruct()
    {
        $asset = new Asset(1);

        $this->assertSame(1, $asset->getValue());
    }
}