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
        $validated = $request->validate([
            'form.name' => 'required',
            'form.phone' => 'required|digits:8',
            'form.email' => 'required|email',
            'form.city' => 'required',
            'form.country' => 'required',
            'form.adress' => 'required',
            'form.isGift' => 'required',

            'form.total' => 'required',
        ]);
        $order = Order::create([
            'name' => $request->form['name'],
            'phone' => $request->form['phone'],
            'email' => $request->form['email'],
            'city' => $request->form['city'],
            'country' => $request->form['country'],
            'adress' => $request->form['adress'],
            'is_gift' => $request->form['isGift'] == 'true' ? true : false,
            'message' => $request->form['message'],
            'total' => $request->form['total'],
        ]);
        // dd($order);
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
