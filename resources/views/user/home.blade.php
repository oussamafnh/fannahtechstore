@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="fullscreen-bg bg-dark">
    </div>

    <!-- Hero section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to FannahTechStore</h1>
            <p>Unleash the Power of Technology: best products with best prices</p>
            <img src="https://res.cloudinary.com/dlsnks7c3/image/upload/v1688152020/909b1160978647aeafb3aa08c42d506b_2_-removebg-preview_hpr6xu.png"
            height="235" loading="lazy" />
        </div>
    </section>

    <!-- Feature section -->
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card text-light">
                        <i class="fas fa-cogs"></i>
                        <h3>User Registration and Authentication</h3>
                        <p>Allow users to create accounts and log in to access personalized features, such as profile management, order history, and saved preferences. This feature enhances user engagement and provides a seamless experience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-light">
                        <i class="fas fa-laptop"></i>
                        <h3>Product Filtering and Search</h3>
                        <p> Implement an advanced filtering and search system that enables users to quickly find products based on specific criteria, such as category, price range, brand, or keywords. This feature improves usability and helps users discover relevant products efficiently.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-light">
                        <i class="fas fa-heart"></i>
                        <h3>Shopping Cart and Checkout Process</h3>
                        <p>Develop a user-friendly shopping cart system that allows users to add products, review their selections, and proceed to the checkout process smoothly. Include features like quantity adjustment, coupon code support, and multiple payment options to streamline the buying experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial section -->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="testimonial">
                        <p>"i liked this website , the best prices in the world , 5 stars for me"</p>
                        <p class="testimonial-author">- John Doe</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-action section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Get Started?</h2>
            <p>Sign up today and experience the amazing features of our platform.</p>
            <a href="#" class="cta-btn">Sign Up</a>
        </div>
    </section>
    <footer class="landing-footer">
        <div class="container">
            <p>&copy; 2023 TechStore. All rights reserved.</p>
            <p>by Oussama Fannah</p>
        </div>
    </footer>
@endsection
