<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CartPart;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $cart = Auth::user()->assignCart();
        return view('cart', compact('cart'));
    }

    public function addToCart(Request $request){
        $user = Auth::user();
        $cart = $user->assignCart();
        $parts = $request->session()->get('parts');

        foreach ($parts['id'] as $id) {
            $part = Part::find($id);
            CartPart::create([
                'cart_id' => $cart->id,
                'part_id' => $part->id,
                'total_price' => $part->price
            ]);
        }
    }
}
