@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="display-4">Order Successful!</h1>
                        <p class="lead">Thank you for your purchase.</p>
                        <p>Your order has been placed successfully.</p>
                        <p>Order ID: {{ $order->id }}</p>
                        <p>Order Total: ${{ $order->total_price }}</p>
                        <p>Payment Method: Cash on Delivery</p>
                        <p>We will contact you shortly for order confirmation and delivery details.</p>
                        <a href="{{ route('home') }}" class="btn btn-primary">Go Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
