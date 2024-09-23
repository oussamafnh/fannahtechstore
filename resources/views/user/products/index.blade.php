@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/user.productindex.css') }}">
    <style>
        .product-image {
            width: 300px;
            height: 200px;
            object-fit: cover;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <div class="container">
        <div class="row mt-5 page-index">
            <div class="col-md-3 filter-bar">
                <div class="sticky-top mt-2" style="top: 0; height: 100vh;">
                    <h3>Filter</h3>
                    <hr>
                    <form action="{{ route('products.filter') }}" method="GET">
                        <h5 class="mt-1">Companys</h5>
                        <!-- Brand filter options -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="MSI" name="brand[]" value="Msi">
                            <label class="form-check-label" for="MSI">MSI</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Asus" name="brand[]" value="Asus">
                            <label class="form-check-label" for="Asus">Asus</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Intel" name="brand[]" value="Intel">
                            <label class="form-check-label" for="Intel">Intel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Nvidia" name="brand[]" value="Nvidia">
                            <label class="form-check-label" for="Nvidia">Nvidia</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Amd" name="brand[]" value="Amd">
                            <label class="form-check-label" for="Amd">Amd</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Logitech" name="brand[]" value="Logitech">
                            <label class="form-check-label" for="Logitech">Logitech</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="SteelSeries" name="brand[]"
                                value="SteelSeries">
                            <label class="form-check-label" for="SteelSeries">SteelSeries </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="razer" name="brand[]" value="razer">
                            <label class="form-check-label" for="razer">Razer </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ASRock" name="brand[]" value="ASRock">
                            <label class="form-check-label" for="ASRock">Asrock </label>
                        </div>

                        <h5 class="mt-1">Category</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Mouse" name="category[]" value="Mouse">
                            <label class="form-check-label" for="Mouse">Mouse</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Keyboard" name="category[]"
                                value="Keyboard">
                            <label class="form-check-label" for="Keyboard">Keyboard</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Motherboard" name="category[]"
                                value="Motherboard">
                            <label class="form-check-label" for="Motherboard">Motherboard</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Cpu" name="category[]"
                                value="Cpu">
                            <label class="form-check-label" for="Cpu">Cpu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Gpu" name="category[]"
                                value="Gpu">
                            <label class="form-check-label" for="Gpu">Gpu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Case" name="category[]"
                                value="Case">
                            <label class="form-check-label" for="Case">Case</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Ssd" name="category[]"
                                value="Ssd">
                            <label class="form-check-label" for="Ssd">Ssd</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Ram" name="category[]"
                                value="Ram">
                            <label class="form-check-label" for="Ram">Ram</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="headset" name="category[]"
                                value="headset">
                            <label class="form-check-label" for="headset">Headset</label>
                        </div>




                        <button type="submit" class="btn btn-primary mt-3">Apply Filters</button>
                        <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">View All</a>
                    </form>
                </div>
            </div>

            <div class="col-md-9 mt-2">
                <div class="d-flex justify-content-between align-items-center">
                    <form action="{{ route('products.search') }}" method="GET" class="input-group mb-1">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>

                </div>
                <hr>
                <div class="row">

                    @yield('cards')
                </div>
            </div>
        </div>
    @endsection




