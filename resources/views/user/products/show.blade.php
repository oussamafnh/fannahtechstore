@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 70vh;">
                    <img src="{{ $product->image }}" alt="Product Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column h-100 justify-content-center">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p><strong>Price:</strong> ${{ $product->price }}</p>
                    <p><strong>Brand:</strong> {{ $product->brand }}</p>
                    <p><strong>Category:</strong> {{ $product->category }}</p>
                    <p><strong>Availability:</strong> {{ $product->available ? 'In Stock' : 'Out of Stock' }}</p>

                    <div class="d-flex row">
                        <form class="col-6" action="{{ route('cart.add', $product->id) }}" method="POST">

                            @csrf
                            <button type="submit" class="btn btn-primary me-3 col-12">Add to Cart</button>
                        </form>
                        <div class="col-6">

                            <a href="{{ route('products.index') }}" class="btn btn-secondary me-3 col-12">Back to
                                Products</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>




    @endsection
