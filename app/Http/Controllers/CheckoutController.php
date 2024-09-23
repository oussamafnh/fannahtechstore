<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function index()
    {
        // Get the current user's cart items
        $cartItems = Cart::with('product')->where('user_id', auth()->id())->get();

        // Calculate the total price
        $totalPrice = 0;
        foreach ($cartItems as $cartItem) {
            $totalPrice += $cartItem->product->price * $cartItem->quantity;
        }

        return view('user.checkout.index', compact('cartItems', 'totalPrice'));
    }
}
