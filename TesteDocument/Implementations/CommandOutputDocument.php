<?php

namespace PHPModern\TesteDocument\Implementations;

require '../Interfaces/Documentable.php';

use PHPModern\TesteDocument\Interfaces\Documentable;

class CommandOutputDocument implements Documentable
{
    protected $command;

    public function __construct($command)
    {
        $this->command = $command;
    }

    public function getId()
    {
        return $this->command;
    }

    public function getContent()
    {
        return shell_exec($this->command);
    }
}