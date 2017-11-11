<?php

namespace Intonate\TinkerZero;

use Laravel\Tinker\TinkerServiceProvider as ServiceProvider;

class TinkerZeroServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @override \Laravel\Tinker\TinkerServiceProvider
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.tinker', Console\TinkerZeroCommand::class);

        $this->commands('command.tinker');
    }
}
