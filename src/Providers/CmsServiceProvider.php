<?php
namespace Level7up\Cms\Providers;

use Illuminate\Support\Facades\Route;
use Level7up\Cms\Console\SeedDatabase;
use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->registerRoutes();

        if ($this->app->runningInConsole()) {
        // dd('cms');
            $this->registerCommands();
        }

    }

    public function register()
    {
        //
    }
    
    private function registerCommands()
    {
        $this->commands([
            SeedDatabase::class,
        ]);
    }



    private function registerRoutes()
    {
        Route::group([
            'middleware' => ['web', 'auth:admin'],
            'prefix' => 'dashboard',
            'as' => 'dashboard.',
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        });

        Route::group([
            'middleware' => ['api'],
            'prefix' => 'api/v1',
        ], function () {
            $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');
        });
    }

}