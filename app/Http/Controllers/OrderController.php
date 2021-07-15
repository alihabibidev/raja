<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function addOrder(Request $request)
    {
        $order = Order::create($request->all());
        if ($order) {
            return 'ok';
        } else {
            return 'no';
        }
    }
}
