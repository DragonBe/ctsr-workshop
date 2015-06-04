<?php
namespace In2it\Workshop\Ctsr;

use In2it\Workshop\Ctsr\CronManager\CollectionAbstract;
use In2it\Workshop\Ctsr\CronManager\Entry;

class CronManager extends CollectionAbstract
{
    /**
     * @param Entry $entry Add a new entry into the cron collection
     */
    public function addEntry(Entry $entry)
    {
        $this->addElement($entry);
    }
}