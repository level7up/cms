<?php
namespace Level7up\Cms\Providers;

use Illuminate\Support\Facades\Route;
// use Level7up\Cms\Console\SeedDatabase;
use Illuminate\Support\ServiceProvider;
use Level7up\Dashboard\Facades\SideMenu;

class CMSServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'CMS');
        
        $this->registerRoutes();

        if ($this->app->runningInConsole()) {
            $this->registerCommands();
        }else {
            $this->registerSidebarMenu();
        }


    }

    public function register()
    {
        //
    }
    
    private function registerCommands()
    {
        // $this->commands([
        //     SeedDatabase::class,
        // ]);
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
    }
    private function registerSidebarMenu()
    {
        SideMenu::add('CMS', 'phosphor-bookmarks', null, 400)
            ->item('cms.Blogs', '/dashboard/blogs', ['create-blogs', 'view-blogs', 'update-blogs', 'delete-blogs'])
            ->item('cms.Pages', '/dashboard/pages', ['create-pages', 'view-pages', 'update-pages', 'delete-pages'])
            ;

        SideMenu::add('CRM', 'phosphor-check-bold', null, 401)
            ->item('crm.Contcat us', '/messages', ['create-contactus', 'view-contactus', 'update-contactus', 'delete-contactus']);

        if (dashboard_has('teams_enabled')) {
            SideMenu::add('cms.Teams', '/teams', ['create-teams', 'view-teams', 'update-teams', 'delete-teams']);
        }
    }


}