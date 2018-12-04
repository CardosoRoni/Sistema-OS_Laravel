<?php

namespace sistema\Providers;

use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
\Carbon\Carbon::setLocale($this->app->getLocale());

    }
  
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
