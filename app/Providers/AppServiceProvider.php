<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (glob(app_path() . '/Helper/*.php') as $filename) {
            require_once $filename;
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
         if (env('APP_ENV') !== 'local') {
            \URL::forceScheme('https');
        }
       
        if (!$this->app->isLocal()) {
            //else register your services you require for production
            $this->app['request']->server->set('HTTPS', true);
        }  
    }
}
