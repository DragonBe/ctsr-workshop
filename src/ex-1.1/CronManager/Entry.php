<?php
namespace In2it\Workshop\Ctsr\CronManager;

use \In2it\Workshop\Ctsr\CronManager\AssetCollection;

class Entry
{
    /**
     * @var AssetCollection The minute asset collection
     */
    protected $minutes;
    /**
     * @var AssetCollection The hour asset collection
     */
    protected $hours;
    /**
     * @var AssetCollection The DOM asset collection
     */
    protected $dom;
    /**
     * @var AssetCollection The Month asset collection
     */
    protected $months;
    /**
     * @var AssetCollection The DOW asset collection
     */
    protected $dow;
    /**
     * @var string the executable command
     */
    protected $command;

    /**
     * @return \In2it\Workshop\Ctsr\CronManager\AssetCollection
     */
    public function getMinutes()
    {
        if (null === $this->minutes) {
            $this->setMinutes(new AssetCollection());
        }
        return $this->minutes;
    }

    /**
     * @param \In2it\Workshop\Ctsr\CronManager\AssetCollection $minutes
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }

    /**
     * @return \In2it\Workshop\Ctsr\CronManager\AssetCollection
     */
    public function getHours()
    {
        if (null === $this->hours) {
            $this->setHours(new AssetCollection());
        }
        return $this->hours;
    }

    /**
     * @param \In2it\Workshop\Ctsr\CronManager\AssetCollection $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    /**
     * @return \In2it\Workshop\Ctsr\CronManager\AssetCollection
     */
    public function getDom()
    {
        if (null === $this->dom) {
            $this->setDom(new AssetCollection());
        }
        return $this->dom;
    }

    /**
     * @param \In2it\Workshop\Ctsr\CronManager\AssetCollection $dom
     */
    public function setDom($dom)
    {
        $this->dom = $dom;
    }

    /**
     * @return \In2it\Workshop\Ctsr\CronManager\AssetCollection
     */
    public function getMonths()
    {
        if (null === $this->months) {
            $this->setMonths(new AssetCollection());
        }
        return $this->months;
    }

    /**
     * @param \In2it\Workshop\Ctsr\CronManager\AssetCollection $months
     */
    public function setMonths($months)
    {
        $this->months = $months;
    }

    /**
     * @return \In2it\Workshop\Ctsr\CronManager\AssetCollection
     */
    public function getDow()
    {
        if (null === $this->dow) {
            $this->setDow(new AssetCollection());
        }
        return $this->dow;
    }

    /**
     * @param \In2it\Workshop\Ctsr\CronManager\AssetCollection $dow
     */
    public function setDow($dow)
    {
        $this->dow = $dow;
    }

    /**
     * @return string
     */
    public function getCommand()
    {
        if (null === $this->command) {
            $this->setCommand('');
        }
        return $this->command;
    }

    /**
     * @param string $command
     */
    public function setCommand($command)
    {
        $this->command = $command;
    }
}
