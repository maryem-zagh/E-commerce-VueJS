<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function purchase(Request $request)
    {
        $order = Order::create([
            'total' => $request->total,
        ]);
        // dd($order);
        /* 
        product_id
        order_id
        quantity
        total
        */
        foreach ($request->carts as $cart) {
            DB::table('order_product')->insert([
                'order_id' => $order->id,
                'product_id' => $cart['product_id'],
                'quantity' => $cart['quantity'],
            ]);
        }
        return response()->json($order);
    }
}
