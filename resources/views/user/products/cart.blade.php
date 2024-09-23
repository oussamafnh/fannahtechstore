@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h2>Shopping Cart</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $cartItem)
                        <tr>
                            <td>{{ $cartItem->product->name }}</td>
                            <td>${{ $cartItem->product->price }}</td>
                            <td>
                                <input type="number" class="form-control" value="{{ $cartItem->quantity }}">
                            </td>
                            <td>${{ $cartItem->product->price * $cartItem->quantity }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order Summary</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Subtotal
                            <span>${{ $subtotal }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Shipping
                            <span>$10.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Total
                            <span>${{ $subtotal + 10 }}</span>
                        </li>
                    </ul>
                    <a href="{{ route('checkout') }}" class="btn btn-primary btn-block mt-4">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
