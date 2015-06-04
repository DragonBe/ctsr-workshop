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

    function __construct($value = null)
    {
        if (null !== $value) {
            $this->setValue($value);
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

}
