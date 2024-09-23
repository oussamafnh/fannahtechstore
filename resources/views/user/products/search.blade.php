@extends('user.products.index')

@section('cards')
    @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ $product->image }}" class="card-img-top product-image" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Price: ${{ $product->price }}</p>
                    <div class="row">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary col-6">View
                            Details</a>
                        <form class="col-6" action="{{ route('cart.add', $product->id) }}" method="POST">

                            @csrf
                            <button type="submit" class="btn btn-primary me-3 col-12">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
