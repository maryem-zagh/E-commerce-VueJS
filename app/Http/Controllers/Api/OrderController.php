<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request, $carts)
    {
        $order = Order::create([
            'total' => $request->total,
        ]);
        /* 
        product_id
        order_id
        quantity
        total
        */
        foreach ($carts as $cart) {
            DB::table('order_product')->insert([
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
            ]);
        }
        return response()->json($order);
    }
}
