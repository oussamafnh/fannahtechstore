<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderItem;
use App\Models\Product;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();


        return view('admin.orders.index', compact('orders'));
    }

    public function destroy(Order $order)
    {
        $order->delete();
        // Additional logic for deletion, such as deleting associated order items, can be implemented here
        return redirect()->route('admin.order')->with('success', 'Order deleted successfully.');
    }

    public function show(Order $order)
    {
        $orderItems = $order->orderItems;
        $products = Product::whereIn('id', $orderItems->pluck('product_id'))->get();

        return view('admin.orders.show', compact('order', 'products'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'country' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'total_price' => 'required|numeric',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Create a new order
        $order = new Order();
        $order->user_id = $user->id;
        $order->name = $validatedData['name'];
        $order->country = $validatedData['country'];
        $order->province = $validatedData['province'];
        $order->city = $validatedData['city'];
        $order->address = $validatedData['address'];
        $order->total_price = $validatedData['total_price'];
        $order->save();

        // Get the products from the cart
        $cartItems = Cart::where('user_id', $user->id)->get();

        // Attach products to the order
        foreach ($cartItems as $cartItem) {
            $product = $cartItem->product;

            // Create a new order item
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $product->id;
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->save();
        }

        // Clear the user's cart after placing the order
        Cart::where('user_id', $user->id)->delete();

        // Redirect or show success message
        return view('user.order.succes', compact('order'));
    }
}
