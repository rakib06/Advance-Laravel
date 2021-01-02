<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Billing\PaymentGatewayContract;
use App\Billing\BankPaymentGateway;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton( PaymentGatewayContract::class, function($app){
            # For Payment medium we just need to tell it here
            return new BankPaymentGateway($currentcy = 'usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
