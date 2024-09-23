@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Profile</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div style="border-radius: 50%; background-image: url('{{ $user->profileimage }}');
                                    height: 140px;
                                    width: 140px;
                                    background-size: cover;"
                                    alt="Profile Image" class="img-fluid ms-5 col-8"></div>

                            </div>
                            <div class="col-md-8">
                                <h4>{{ $user->name }}</h4>
                                <p>{{ $user->email }}</p>
                                <div>
                                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                                    <form action="{{ route('profile.destroy') }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete your account?')">Delete
                                            Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>My Orders</h2>
                <ul class="list-group">
                    @foreach ($user->orders as $order)
                        <li class="list-group-item">
                            <span>Order ID: {{ $order->id }}</span>
                            <span>Total Price: ${{ $order->total_price }}</span>
                            <span>At: {{ $order->created_at->format('d M Y') }}</span>
                            <div>Products:</div>
                            @if ($order->orderItems && count($order->orderItems) > 0)
                                <ul>
                                    @foreach ($order->orderItems as $orderItem)
                                        <li>{{ $orderItem->product->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <div>No products found.</div>
                            @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
