@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Order Details</h2>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order Information</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Name:</strong> {{ $order->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Country:</strong> {{ $order->country }}
                        </li>
                        <li class="list-group-item">
                            <strong>Province:</strong> {{ $order->province }}
                        </li>
                        <li class="list-group-item">
                            <strong>City:</strong> {{ $order->city }}
                        </li>
                        <li class="list-group-item">
                            <strong>Address:</strong> {{ $order->address }}
                        </li>
                        <li class="list-group-item">
                            <strong>Total Price:</strong> ${{ $order->total_price }}
                        </li>
                        <li class="list-group-item">
                            <strong>Time:</strong> {{ $order->created_at->format('D, M Y') }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <h4 class="card-title">Products</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>${{ $product->price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
