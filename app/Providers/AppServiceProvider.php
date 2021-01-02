<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Billing\PaymentGatewayContract;
use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
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
            # return new BankPaymentGateway($currentcy = 'usd');
            if (request()->has('credit'))
            {   
                # to test this use this link
                # http://127.0.0.1:8000/pay?credit=true
                return new CreditPaymentGateway($currentcy = 'usd');

            }
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
