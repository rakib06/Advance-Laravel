<?php

namespace App\Providers;

use App\Channel;
use Illuminate\Contracts\View\View;
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
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   // Option 1: every single view
        
        // view()->share('key', $value);
        // share with every single view
        // for only when you need to do that many places asc /desc
        // view()->share('channels', Channel::orderBy('name', 'asc')->get());
        

        # Option 2: Granular views with wildcards  
        /* view()->composer('name', function ($view) {
            
        }); */
        // post.* 
        view()->composer(['post.create'], function ($view) {
            $view->with('channels', Channel::orderBy('name', 'desc')->get());
        });
    }
}
