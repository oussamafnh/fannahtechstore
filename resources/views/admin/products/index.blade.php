@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Product Management</h2>
            <div class="mb-3">
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Create New Product</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>stock</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>${{ $product->price }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary me-1">Edit</a>
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
