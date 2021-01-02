<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Billing\PaymentGateway;

use App\Orders\OrderDetails;

class PayOrderController extends Controller
{   // Reflection Class 
    public function store(OrderDetails $orderDetails,PaymentGateway $paymentGateway )
    {   
        $oder = $orderDetails->all();
        # $paymentGateway = new PaymentGateway( $currency = 'usd');
        dd($paymentGateway->charge(2500));
    }
}
