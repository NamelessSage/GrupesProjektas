<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CartPart;
use Illuminate\Http\Request;

class CartPartController extends Controller
{
    public function destroy($id){

        $cartPart = CartPart::find($id);
        $cartPart->delete();

        return redirect('cart')->with('success', 'Item deleted succesfully');
    }
}
