<?php
namespace In2it\Test\Workshop\Ctsr;

use In2it\Workshop\Ctsr\CronManager\AssetCollection;

class AssetCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers In2it\Workshop\Ctsr\CronManager\AssetCollection::addAsset
     * @covers In2it\Workshop\Ctsr\CronManager\CollectionAbstract::addElement
     * @covers In2it\Workshop\Ctsr\CronManager\CollectionAbstract::count
     * @covers In2it\Workshop\Ctsr\CronManager\CollectionAbstract::valid
     * @covers In2it\Workshop\Ctsr\CronManager\CollectionAbstract::key
     * @covers In2it\Workshop\Ctsr\CronManager\CollectionAbstract::current
     * @covers In2it\Workshop\Ctsr\CronManager\CollectionAbstract::next
     * @covers In2it\Workshop\Ctsr\CronManager\CollectionAbstract::rewind
     */
    public function testAssetCollectionAddsAndRetrievesAssets()
    {
        $asset = $this->getMock(
            'In2it\\Workshop\\Ctsr\\CronManager\\Asset'
        );
        $assetCollection = new AssetCollection();
        $this->assertInstanceOf('\\Iterator', $assetCollection);

        for ($i = 0; $i < 5; $i++) {
            $assetCollection->addAsset($asset);
        }
        $this->assertCount(5, $assetCollection);
        $index = 0;
        while ($assetCollection->valid()) {
            $this->assertSame($index, $assetCollection->key());
            $this->assertInstanceOf(
                'In2it\\Workshop\\Ctsr\\CronManager\\Asset',
                $assetCollection->current()
            );
            $index++;
            $assetCollection->next();
        }
        $assetCollection->rewind();
        $this->assertSame(0, $assetCollection->key());
    }

}
