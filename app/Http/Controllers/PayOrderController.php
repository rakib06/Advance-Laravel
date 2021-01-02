<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{   // Reflection Class 
    public function store(OrderDetails $orderDetails,PaymentGatewayContract $paymentGateway )
    {   
        $oder = $orderDetails->all();
        # $paymentGateway = new PaymentGateway( $currency = 'usd');
        dd($paymentGateway->charge(2500));
    }
}
