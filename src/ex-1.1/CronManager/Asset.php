<?php
namespace In2it\Workshop\Ctsr\CronManager;

class Asset
{
    const MINUTE = 'minute';
    const HOUR = 'hour';
    const DOM = 'day of the month';
    const MONTH = 'month';
    const DOW = 'day of the week';

    /**
     * @var int The value for the asset
     */
    protected $value;
    /**
     * @var int The interval for the asset
     */
    protected $interval;

    function __construct($value = null, $interval = null)
    {
        if (null !== $value) {
            $this->setValue($value);
        }
        if (null !== $interval) {
            $this->setInterval($interval);
        }
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = (int) $value;
    }

    /**
     * @return int
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * @param int $interval
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
    }

}
