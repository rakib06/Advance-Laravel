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
    {   // view()->share('key', $value);
        // for only when you need to do that many places asc /desc
        view()->share('channels', Channel::orderBy('name', 'asc')->get());
    }
}
