<?php

namespace First\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class FirstServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName = strtolower(basename(dirname(__DIR__,1)));
        config([
            $moduleName => File::getRequire(getConfigFile('routes',$moduleName))
        ]);
        $this->loadRoutesFrom(loadRoute('web',$moduleName));
        $this->loadRoutesFrom(loadRoute('api',$moduleName));
        $this->loadTranslationsFrom(loadTrans($moduleName),$moduleName);
        $this->loadViewsFrom(loadViews($moduleName),$moduleName);
        $this->loadMigrationsFrom(loadMigrations($moduleName));
    }
}
