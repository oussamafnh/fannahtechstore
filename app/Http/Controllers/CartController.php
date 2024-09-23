<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request, $productId)
    {
        // Get the product by ID
        $product = Product::findOrFail($productId);

        // Get the current user
        $user = $request->user();

        // Check if the product already exists in the user's cart
        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->first();

        // If the product already exists, update the quantity
        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // If the product doesn't exist, create a new cart item
            $cartItem = new Cart([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => 1
            ]);
            $cartItem->save();
        }

        return redirect()->route('products.index')->with('success', 'Product added to cart successfully.');
    }

public function index()
{
    // Retrieve the user's cart items
    $cartItems = Cart::where('user_id', auth()->id())->get();

    // Calculate the subtotal of the cart items
    $subtotal = 0;
    foreach ($cartItems as $cartItem) {
        $subtotal += $cartItem->product->price * $cartItem->quantity;
    }

    return view('user.products.cart', compact('cartItems', 'subtotal'));
}



    public function remove($cartItemId)
    {
        // Find the cart item by ID
        $cartItem = Cart::findOrFail($cartItemId);

        // Delete the cart item
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully.');
    }
}
