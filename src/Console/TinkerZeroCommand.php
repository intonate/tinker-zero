<?php

namespace Intonate\TinkerZero\Console;

use Laravel\Tinker\ClassAliasAutoloader;
use Laravel\Tinker\Console\TinkerCommand;
use Psy\Configuration;
use Psy\Shell;

class TinkerZeroCommand extends TinkerCommand
{
    /**
     * Execute the console command.
     *
     * @override \Laravel\Tinker\Console\TinkerCommand
     *
     * @return int
     */
    public function handle()
    {
        $this->getApplication()->setCatchExceptions(false);

        $shell = new Shell($this->getConfig());
        $shell->addCommands($this->getCommands());
        $shell->setIncludes($this->argument('include'));

        $loader = ClassAliasAutoloader::register($shell, $this->autoLoadClassMap());

        try {
            $shell->run();
        } finally {
            $loader->unregister();
        }

        return 0;
    }

    /**
     * @return \Psy\Configuration
     */
    public function getConfig(): Configuration
    {
        $config = new Configuration(['updateCheck' => 'never']);
        $config->getPresenter()->addCasters($this->getCasters());

        return $config;
    }

    /**
     * @return string
     */
    protected function autoLoadClassMap(): string
    {
        return $this->getLaravel()->basePath().'/vendor/composer/autoload_classmap.php';
    }
}
