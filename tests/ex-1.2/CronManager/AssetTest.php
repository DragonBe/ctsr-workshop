<?php
namespace In2it\Test\Workshop\Ctsr;

use In2it\Workshop\Ctsr\CronManager\Asset;
use In2it\Workshop\Ctsr\CronManager\AssetCollection;

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
     * @covers In2it\Workshop\Ctsr\CronManager\Asset::setValue
     * @covers In2it\Workshop\Ctsr\CronManager\Asset::getValue
     */
    public function testAssetCanBeSetAtConstruct()
    {
        $asset = new Asset(1);

        $this->assertSame(1, $asset->getValue());
    }

    public function badDataProvider()
    {
        return array (
            array ('foo'),
            array (new \stdClass()),
            array (array ()),
            array (1.50),
        );
    }

    /**
     * @dataProvider badDataProvider
     * @covers In2it\Workshop\Ctsr\CronManager\Asset::__construct
     * @covers In2it\Workshop\Ctsr\CronManager\Asset::setValue
     * @covers In2it\Workshop\Ctsr\CronManager\Asset::getValue
     * @expectedException \InvalidArgumentException
     */
    public function testRejectBadData($badData)
    {
        $asset = new Asset($badData);
        $this->fail('Expected InvalidArgumentException to be thrown');
    }
}
