<?php
namespace In2it\Workshop\Ctsr\CronManager;

class AssetCollection extends CollectionAbstract
{
    /**
     * Adds an Asset element to the collection
     *
     * @param Asset $asset
     */
    public function addAsset(Asset $asset)
    {
        $this->addElement($asset);
    }
}