<?php
namespace In2it\Workshop\Ctsr\CronManager;

class Command
{
    /**
     * @var string The command that needs to be executed
     */
    protected $command;

    public function __construct($command = null)
    {
        if (null !== $command) {
            $this->setCommand($command);
        }
    }
    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param string $command
     */
    public function setCommand($command)
    {
        $this->command = (string) $command;
    }
}
