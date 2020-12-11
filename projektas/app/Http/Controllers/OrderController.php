<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create($id){
        $cart=Cart::find($id);
        $cart->paid = true;
        Order::create([
            'cart_id' => $cart->id
        ]);
        $cart->save();
        return back();
    }
}
