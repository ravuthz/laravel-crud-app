<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        Schema::defaultStringLength(191);
        
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('CUSTOM NAVIGATION');
            $event->menu->add([
                'text' => 'Blog',
                'url' => 'admin/blog',
            ]);
            
            $event->menu->add([
                'text' => 'Pages',
                'url' => 'adminz/pages'
            ]);
            
            $event->menu->add([
                'text' => 'Posts',
                'url' => 'adminz/posts'
            ]);
            
            $event->menu->add([
                'text' => 'Users',
                'url' => 'adminz/users'
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
