<?php

namespace Draskog\LaravelPreset;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;

class DraskogServiceProvider extends ServiceProvider {

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('draskog', function ($command)
        {
            Preset::install();
            $command->info('All finished! Please compile your assets, and you are all set to go!');
        });
    }
}
