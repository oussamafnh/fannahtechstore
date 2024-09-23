<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FannahTechStore</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="height: 9vh">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="https://res.cloudinary.com/dlsnks7c3/image/upload/v1688152213/909b1160978647aeafb3aa08c42d506b_3__1_-removebg-preview_byjhzl.png"
                    height="35" alt="Logo" loading="lazy" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('products.index') }}">Products</a>
                    </li>
                    @endif

                </ul>
                <!-- Right elements -->
                <div class="d-flex align-items-center">

                    @auth
                        <a href="{{ route('cart.index') }}" class="nav-link">cart</a>
                        <a href="{{ route('user.profile') }}" class="nav-link">{{ Auth::user()->name }}</a>
                        <form action="{{ route('users.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="logout-btn">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('users.showLoginForm') }}" class="nav-link">Login</a>
                        <a href="{{ route('users.showRegistrationForm') }}" class="nav-link">Register</a>
                        @endif
                    </div>
        </nav>

        <!-- Navbar -->

        <div class="" style="margin-top:9vh">
            @yield('content')
        </div>


    </body>

    </html>
