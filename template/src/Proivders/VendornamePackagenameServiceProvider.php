<?php

namespace Vendorname\Packagename\Providers;

use Illuminate\Support\ServiceProvider;
use Vendorname\Packagename\Command\FooCommand;

class VendornamePackagenameServiceProvider extends ServiceProvider
{


    public function register()
    {
         
        $this->mergeConfigFrom($this->getPath('config/config.php'),'vendornamepackagename');
    }

    public function boot()
    {
        $this->loadRoutesFrom($this->getPath('routes/routes.php'));
        $this->loadMigrationsFrom($this->getPath('database/migrations'));
        $this->loadTranslationsFrom($this->getPath('resources/lang'),'vendornamepackagename');
        $this->loadViewsFrom($this->getPath('resources/views'),'vendornamepackagename');

        // publish
        $this->publishes([
            $this->getPath('resources/lang') => resource_path('lang/vendorname/packagename'),
            $this->getPath('resources/views') => resource_path('views/vendorname/packagename')
        ]);

        $this->publishes([
            $this->getPath('public') => public_path('vendornamepackagename')
        ],'public');

        // other
        if($this->app->runningInConsole()){
            $this->commands([
                FooCommand::class
            ]);
        }

    }

    protected function getPath(string $append = null): string
    {
        return dirname(__DIR__) .'/'.$append;
    }
}