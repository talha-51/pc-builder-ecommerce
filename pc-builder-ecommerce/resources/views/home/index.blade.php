@extends('layouts.frontend.master')

@section('content')
    <!-- Side Navbar Start -->
    <div class="container-fluid row">
        <div class="col-2">
            <div class="btn-group dropend d-block">
                <button type="button" class="btn btn-dark dropdown-toggle w-100" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    PC Components
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">CPU</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">GPU</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Motherboard</a></li>
                </ul>
            </div>

            <div class="btn-group dropend d-block mt-1">
                <button type="button" class="btn btn-dark dropdown-toggle w-100" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Accessories
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Mouse</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Keyboard</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Headphone</a></li>
                </ul>
            </div>

            <div class="btn-group dropend d-block mt-1">
                <button type="button" class="btn btn-dark dropdown-toggle w-100" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Networking
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Router</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">ONU</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Starlink</a></li>
                </ul>
            </div>
        </div>
        <!-- Side Navbar End -->

        <!-- Hero Carousel Start -->
        <div class="col-10">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="{{ asset('images') }}/intel.png" class="d-block w-100" alt="..."
                            style="height: 700px; object-fit: cover;" />
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images') }}/amd.jpg" class="d-block w-100" alt="..."
                            style="height: 700px; object-fit: cover;" />
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images') }}/nvidia.png" class="d-block w-100" alt="..."
                            style="height: 700px; object-fit: cover;" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Hero Carousel End -->
    </div>

    <!-- Catagories Start -->
    <div class="container-fluid mt-5">
        <div class="container-fluid text-center">
            <h1>Categories</h1>
        </div>
        <marquee class="mt-2" scrollamount="10" width="100%" direction="left" height="200px">
            <img src="{{ asset('images') }}/gigabyte-logo.webp" style="width: 150px; height: 150px; border-radius: 50%;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{ asset('images') }}/aorus-logo.jpg" style="width: 150px; height: 150px; border-radius: 50%;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{ asset('images') }}/intel.png" style="width: 150px; height: 150px; border-radius: 50%;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{ asset('images') }}/amd.jpg" style="width: 150px; height: 150px; border-radius: 50%;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{ asset('images') }}/nvidia.png" style="width: 150px; height: 150px; border-radius: 50%;">
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
