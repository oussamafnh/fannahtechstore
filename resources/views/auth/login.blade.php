@extends('layouts.app')

@section('content')
    <section class="vh-91">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4">
                        {{-- <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <span class="h1 fw-bold mb-0">Logo</span> --}}
                        <a href="/">
                            <img src="https://res.cloudinary.com/dlsnks7c3/image/upload/v1688152213/909b1160978647aeafb3aa08c42d506b_3__1_-removebg-preview_byjhzl.png"
                            height="65" alt="Logo" loading="lazy" />
                        </a>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form method="POST" action="{{ route('users.login') }}" style="width: 23rem;">
                            @csrf

                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="form2Example18"
                                    class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">Email address</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="form2Example28"
                                    class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Password</label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                            </div>

                            <p>Don't have an account? <a href="{{ route('users.showRegistrationForm') }}" class="link-info">Register here</a></p>

                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="https://i.pinimg.com/564x/cd/cc/49/cdcc49ea2a91f0ef67fa774973a4fb18.jpg"
                        alt="Login image" class="w-100" style="object-fit: cover; object-position: left; height:91vh">
                </div>
            </div>
        </div>
    </section>
@endsection