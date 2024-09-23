<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();
        return redirect()->route('users.showLoginForm');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->route('home')->with('success', 'Login successful.');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function adminView()
    {
        $user = Auth::user();
        if ($user && $user->role === 1) {
            $products = Product::latest()->get();

            return view('admin.products.index', compact('products'));
        }
        return view('user.home')->with('error', 'You do not have permission to access this page.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('users.showLoginForm');
    }

    public function showProfile()
    {
        $user = Auth::user();
        return view('user.profile.index', ['user' => $user]);
    }

    public function showEditingForm()
    {
        $user = Auth::user();
        return view('user.profile.edit', ['user' => $user]);
    }

    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'profileimage' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $user = Auth::user();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        if ($validatedData['password']) {
            $user->password = bcrypt($validatedData['password']);
        }
        if ($request->hasFile('profileimage')) {
            $imagePath = $request->file('profileimage')->getRealPath();
            $uploadedImage = Cloudinary::upload($imagePath, ['folder' => 'profile_images']);
            $user->profileimage = $uploadedImage->getSecurePath();
        }
        $user->save();
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully.');
    }
    public function destroy()
    {
        $user = Auth::user();
        $user->delete();
        Auth::logout();
        return redirect()->route('users.showLoginForm');
    }
}
