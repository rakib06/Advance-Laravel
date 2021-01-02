<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Billing\PaymentGateway;

class PayOrderController extends Controller
{   // Reflection Class 
    public function store(PaymentGateway $paymentGateway )
    {   
        # $paymentGateway = new PaymentGateway( $currency = 'usd');
        dd($paymentGateway->charge(2500));
    }
}
