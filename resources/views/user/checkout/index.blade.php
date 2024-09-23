@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Checkout</h2>
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" required>
                            </div>
                            <div class="mb-3">
                                <label for="province" class="form-label">Province</label>
                                <input type="text" class="form-control" id="province" name="province" required>
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>
                            <h4 class="mb-4">Order Summary</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cartItems as $cartItem)
                                        <tr>
                                            <td>{{ $cartItem->product->name }}</td>
                                            <td>${{ $cartItem->product->price }}</td>
                                            <input type="hidden" name="products[]" value="{{ $cartItem->product->id }}">
                                            <input type="hidden" name="prices[]" value="{{ $cartItem->product->price }}">
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                            <button type="submit" class="btn btn-primary col-12">Place Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
