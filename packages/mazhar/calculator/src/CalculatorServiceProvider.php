<?php

namespace Mazhar\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->make('Mazhar\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
