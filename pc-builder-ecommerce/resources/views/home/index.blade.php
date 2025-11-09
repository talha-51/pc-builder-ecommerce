@extends('layouts.frontend.master')

@section('content')
    <!-- Side Navbar Start -->
    <div class="container-fluid row">
        <div class="col-2">
            @foreach ($categories as $category)
                <div class="btn-group dropend d-block mt-1">
                    <button type="button" class="btn btn-dark dropdown-toggle w-100" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ $category->name }}
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($subcategories->where('cat_id', $category->id) as $subcategory)
                            <li><a class="dropdown-item" href="">{{ $subcategory->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
        <!-- Side Navbar End -->

        <!-- Hero Carousel Start -->
        <div class="col-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                @if ($sliders->isEmpty())
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/sliders/Image_not_available.png') }}"
                                class="d-block w-100 img-fluid object-fit-contain" alt="No image available"
                                style="max-height: 80vh;" />
                        </div>
                    </div>
                @else
                    <!-- Dynamic indicators -->
                    <div class="carousel-indicators">
                        @foreach ($sliders as $key => $slider)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                aria-current="{{ $key == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $key + 1 }}">
                            </button>
                        @endforeach
                    </div>

                    <!-- Dynamic slides -->
                    <div class="carousel-inner">
                        @foreach ($sliders as $key => $slider)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
                                <img src="{{ asset($slider->image) }}" class="d-block w-100 img-fluid object-fit-contain"
                                    alt="Slider image" style="max-height: 80vh;" />
                            </div>
                        @endforeach
                    </div>

                    <!-- Controls -->
                    <!-- Previous -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark bg-opacity-75 p-3 rounded-circle"
                            aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <!-- Next -->
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark bg-opacity-75 p-3 rounded-circle"
                            aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                @endif
            </div>
        </div>
        <!-- Hero Carousel End -->
    </div>

    <!-- Catagories Start -->
    <div class="container-fluid mt-5">
        <div class="container-fluid text-center">
            <h1>Categories</h1>
        </div>
        <marquee class="mt-2" scrollamount="10" width="100%" direction="left" height="220px">
            <div class="d-flex">
                @foreach ($categories as $category)
                    <div class="text-center mx-4">
                        <img src="{{ $category->image }}" class="img-thumbnail rounded-circle object-fit-cover mb-2"
                            style="width: 150px; height: 150px;">
                        <div class="fw-bold fs-5 text-dark">{{ $category->name }}</div>
                    </div>
                @endforeach
            </div>
        </marquee>
    </div>
    <!-- Catagories End -->

    <!-- PC Components Catagory Card Carousel Start -->
    <div class="container-fluid text-center mb-5">
        <h3 class="fw-bold mb-4">PC Components</h3>
        <div class="carousel-wrapper position-relative">
            <button class="carousel-btn prevBtn"><i class="bi bi-chevron-left"></i></button>
            <div class="carousel-viewport">
                <div class="carousel-track">
                    <div class="product-card"><img src="{{ asset('images') }}/pccomp-1.jpg">
                        <div class="row mt-2">
                            <div class="col-6">
                                <p>Title: Product-1</p>
                            </div>
                            <div class="col-6">
                                <p>Price: 1000 BDT</p>
                            </div>
                        </div>
                        <div><button class="btn btn-sm btn-outline-success">Add to Cart</button><button
                                class="btn btn-sm btn-danger">Buy Now</button></div>
                    </div>
                    <div class="product-card"><img src="{{ asset('images') }}/pccomp-2.webp">
                        <div class="row mt-2">
                            <div class="col-6">
                                <p>Title: Product-2</p>
                            </div>
                            <div class="col-6">
                                <p>Price: 1000 BDT</p>
                            </div>
                        </div>
                        <div><button class="btn btn-sm btn-outline-success">Add to Cart</button><button
                                class="btn btn-sm btn-danger">Buy Now</button></div>
                    </div>
                    <div class="product-card"><img src="{{ asset('images') }}/pccomp-3.png">
                        <div class="row mt-2">
                            <div class="col-6">
                                <p>Title: Product-3</p>
                            </div>
                            <div class="col-6">
                                <p>Price: 1000 BDT</p>
                            </div>
                        </div>
                        <div><button class="btn btn-sm btn-outline-success">Add to Cart</button><button
                                class="btn btn-sm btn-danger">Buy Now</button></div>
                    </div>
                    <div class="product-card"><img src="{{ asset('images') }}/pccomp-4.jpg">
                        <div class="row mt-2">
                            <div class="col-6">
                                <p>Title: Product-4</p>
                            </div>
                            <div class="col-6">
                                <p>Price: 1000 BDT</p>
                            </div>
                        </div>
                        <div><button class="btn btn-sm btn-outline-success">Add to Cart</button><button
                                class="btn btn-sm btn-danger">Buy Now</button></div>
                    </div>
                    <div class="product-card"><img src="{{ asset('images') }}/pccomp-5.png">
                        <div class="row mt-2">
                            <div class="col-6">
                                <p>Title: Product-5</p>
                            </div>
                            <div class="col-6">
                                <p>Price: 1000 BDT</p>
                            </div>
                        </div>
                        <div><button class="btn btn-sm btn-outline-success">Add to Cart</button><button
                                class="btn btn-sm btn-danger">Buy Now</button></div>
                    </div>
                </div>
            </div>
            <button class="carousel-btn nextBtn"><i class="bi bi-chevron-right"></i></button>
        </div>
    </div>
    <!-- PC Components Catagory Card Carousel End -->

    <!-- Accessories Catagory Card Carousel Start -->
    <div class="container-fluid text-center mb-5">
        <h3 class="fw-bold mb-4">Accessories</h3>
        <div class="carousel-wrapper position-relative">
            <button class="carousel-btn prevBtn"><i class="bi bi-chevron-left"></i></button>
            <div class="carousel-viewport">
                <div class="carousel-track">
                    <div class="product-card"><img src="{{ asset('images') }}/accessories-1.webp">
                        <div class="row mt-2">
                            <div class="col-6">
                                <p>Title: Product-1</p>
                            </div>
                            <div class="col-6">
                                <p>Price: 1000 BDT</p>
                            </div>
                        </div>
                        <div><button class="btn btn-sm btn-outline-success">Add to Cart</button><button
                                class="btn btn-sm btn-danger">Buy Now</button></div>
                    </div>
                    <div class="product-card"><img src="{{ asset('images') }}/accessories-2.jpg">
                        <div class="row mt-2">
                            <div class="col-6">
                                <p>Title: Product-2</p>
                            </div>
                            <div class="col-6">
                                <p>Price: 1000 BDT</p>
                            </div>
                        </div>
                        <div><button class="btn btn-sm btn-outline-success">Add to Cart</button><button
                                class="btn btn-sm btn-danger">Buy Now</button></div>
                    </div>
                    <div class="product-card"><img src="{{ asset('images') }}/accessories-3.jpg">
                        <div class="row mt-2">
                            <div class="col-6">
                                <p>Title: Product-3</p>
                            </div>
                            <div class="col-6">
                                <p>Price: 1000 BDT</p>
                            </div>
                        </div>
                        <div><button class="btn btn-sm btn-outline-success">Add to Cart</button><button
                                class="btn btn-sm btn-danger">Buy Now</button></div>
                    </div>
                    <div class="product-card"><img src="{{ asset('images') }}/accessories-4.webp">
                        <div class="row mt-2">
                            <div class="col-6">
                                <p>Title: Product-4</p>
                            </div>
                            <div class="col-6">
                                <p>Price: 1000 BDT</p>
                            </div>
                        </div>
                        <div><button class="btn btn-sm btn-outline-success">Add to Cart</button><button
                                class="btn btn-sm btn-danger">Buy Now</button></div>
                    </div>
                    <div class="product-card"><img src="{{ asset('images') }}/accessories-5.webp">
                        <div class="row mt-2">
                            <div class="col-6">
                                <p>Title: Product-5</p>
                            </div>
                            <div class="col-6">
                                <p>Price: 1000 BDT</p>
                            </div>
                        </div>
                        <div><button class="btn btn-sm btn-outline-success">Add to Cart</button><button
                                class="btn btn-sm btn-danger">Buy Now</button></div>
                    </div>
                </div>
            </div>
            <button class="carousel-btn nextBtn"><i class="bi bi-chevron-right"></i></button>
        </div>
    </div>
    <!-- Accessories Catagory Card Carousel End -->

    <!-- Brand Section Start -->
    <div class="container-fluid mt-5">
        <div class="container-fluid text-center">
            <h1>Brands</h1>
        </div>
        <marquee class="mt-2" scrollamount="10" width="100%" direction="left" height="200px">
            <img src="{{ asset('images') }}/gigabyte-logo.webp" style="width: 300px; height: 150px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{ asset('images') }}/aorus-logo.jpg" style="width: 300px; height: 150px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{ asset('images') }}/intel.png" style="width: 300px; height: 150px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{ asset('images') }}/amd.jpg" style="width: 300px; height: 150px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{ asset('images') }}/nvidia.png" style="width: 300px; height: 150px;">
        </marquee>
    </div>
    <!-- Brand Section End -->
@endsection
