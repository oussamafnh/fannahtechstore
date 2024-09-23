<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $user = Auth::user();

        // Apply filters

        // Redirect to home or admin dashboard based on role
        if (Auth::check() && $user->isAdmin()) {
            return view('admin.products.index', compact('products'));
        }

        return view('user.products.list', compact('products'));
    }



    public function filter(Request $request)
    {
        $selectedBrands = $request->input('brand', []);
        $selectedCategories = $request->input('category', []);

        $products = Product::query(); // Assuming you have a "Product" model

        if (!empty($selectedBrands)) {
            $products = $products->whereIn('brand', $selectedBrands);
        }

        if (!empty($selectedCategories)) {
            $products = $products->whereIn('category', $selectedCategories);
        }

        $products = $products->get(); // Retrieve the filtered products

        return view('user.products.filter', compact('products'));
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');
        $products = Product::where('name', 'like', '%' . $searchQuery . '%')->get();

        return view('user.products.search', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('user.products.show', compact('product'));
    }

    public function editProduct($id)
    {
        // Retrieve the product by ID and perform any necessary operations
        $product = Product::findOrFail($id);

        // Return the view for editing the product with the given ID
        return view('admin.products.edit', compact('product'));
    }



    public function updateProduct(Request $request, Product $product)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required|string',
            'brand' => 'required|string',
        ]);

        // Update the product
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->stock = $validatedData['stock'];
        $product->category = $validatedData['category'];
        $product->brand = $validatedData['brand'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->getRealPath();
            $uploadedImage = Cloudinary::upload($imagePath, ['folder' => 'techstore']);
            $product->image = $uploadedImage->getSecurePath();
        }


        $product->save();

        return redirect()->route('home')->with('success', 'Product updated successfully.');
    }


    public function destroyProduct($id)
    {
        // Retrieve the product by ID and delete it
        $product = Product::findOrFail($id);
        $product->delete();

        // Redirect or show success message
        return redirect()->route('home')->with('success', 'Product deleted successfully.');
    }

    public function createProduct()
    {
        return view('admin.products.create');
    }

    public function storeProduct(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required|string',
            'brand' => 'required|string',
        ]);


        // Create a new product
        $product = new Product();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->stock = $validatedData['stock'];
        $product->category = $validatedData['category'];
        $product->brand = $validatedData['brand'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->getRealPath();
            $uploadedImage = Cloudinary::upload($imagePath, ['folder' => 'techstore']);
            $product->image = $uploadedImage->getSecurePath();
        }

        $product->save();

        return redirect()->route('home')->with('success', 'Product created successfully.');
    }
}
