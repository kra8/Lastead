<?php

namespace Lastead;

use Symfony\Component\Console\Application;

class Kernel
{
    private $app;

    private $commands = [
        'Lastead\Command\NewCommand',
        'Lastead\Command\AdaptCommand',
    ];

    public function __construct()
    {
        $this->app = new Application('Laravel and Homestead set up script.', 'v1.1.1');
        foreach ($this->commands as $commandClassName) {
            $command = new $commandClassName();
            $this->app->add($command);
        }
    }

    public function run()
    {
        $this->app->run();
    }
}
