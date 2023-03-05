<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function cartList()
    {
        $carts = Cart::all();
        return view('home.cart', compact('carts'));
    }

    public function addCart(Request $request)
    {
        $cart = new Cart;
        $cart->productName    = $request->productName;
        $cart->productCode    = $request->productCode;
        $cart->productImage   = $request->productImage;
        $cart->unit           = $request->unit;
        $cart->price          = $request->price;
        $cart->qty            = $request->qty;
        $cart->save();
        return redirect('cart')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
