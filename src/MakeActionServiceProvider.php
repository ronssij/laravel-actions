<?php

namespace Ronssij\Commands;

use Illuminate\Support\ServiceProvider;
use Ronssij\Commands\MakeActionCommand;

class MakeActionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      if ($this->app->runningInConsole()) {
        $this->commands([MakeActionCommand::class]);
      }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
