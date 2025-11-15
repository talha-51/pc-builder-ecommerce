@extends('layouts.frontend.master')

@section('title')
    @if (!$settings)
    @else
        {{ $settings->company_name }}
    @endif
@endsection

@section('content')

    {{-- alert --}}
    @if (session('success'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055; margin-top: 70px;">
            <div class="alert alert-success alert-dismissible fade show shadow" role="alert" id="flashAlert">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055; margin-top: 70px;">
            <div class="alert alert-danger alert-dismissible fade show shadow" role="alert" id="flashAlert">
                {{ session('error') }}
            </div>
        </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <!-- Side Navbar Start -->
            <div class="col-2">
                @foreach ($categories as $category)
                    <div class="btn-group dropend d-block mt-1">
                        {{-- for single dynamic page --}}

                        <a href="{{ route('home.filteredProducts', ['type' => 'category', 'name' => str_replace(' ', '-', $category->name)]) }}"
                            class="btn btn-dark dropdown-toggle w-100 category-btn" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ $category->name }}
                        </a>

                        {{-- for individual page --}}

                        {{-- <a href="{{ route('home.filteredByCategoryProducts', str_replace(' ', '-', $category->name)) }}"
                        class="btn btn-dark dropdown-toggle w-100 category-btn" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ $category->name }}
                    </a> --}}
                        <ul class="dropdown-menu">
                            @foreach ($subcategories->where('cat_id', $category->id) as $subcategory)
                                <li>
                                    {{-- for single dynamic page --}}

                                    <a class="dropdown-item"
                                        href="{{ route('home.filteredProducts', ['type' => 'sub-category', 'name' => str_replace(' ', '-', $subcategory->name)]) }}">
                                        {{ $subcategory->name }}
                                    </a>

                                    {{-- for individual page --}}

                                    {{-- <a class="dropdown-item"
                                    href="{{ route('home.filteredBySubCategoryProducts', str_replace(' ', '-', $subcategory->name)) }}">
                                    {{ $subcategory->name }}
                                </a> --}}
                                </li>
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
                                    class="d-block w-100 img-fluid object-fit-contain" style="max-height: 80vh;" />
                            </div>
                        </div>
                    @else
                        <!-- Dynamic indicators -->
                        <div class="carousel-indicators">
                            @foreach ($sliders as $key => $slider)
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                    aria-current="{{ $key == 0 ? 'true' : 'false' }}"
                                    aria-label="Slide {{ $key + 1 }}">
                                </button>
                            @endforeach
                        </div>

                        <!-- Dynamic slides -->
                        <div class="carousel-inner">
                            @foreach ($sliders as $key => $slider)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="3000">
                                    <img src="{{ asset($slider->image) }}" class="d-block w-100"
                                        style="height: 80vh; object-fit: cover;" alt="Slider image">
                                </div>
                            @endforeach
                        </div>

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
    </div>

    <!-- Catagories marquee Start -->
    <div class="container-fluid mt-5">
        <div class="container-fluid text-center">
            <h1>Categories</h1>
        </div>
        <marquee class="mt-2" scrollamount="10" width="100%" direction="left" height="220px">
            <div class="d-flex">
                @foreach ($categories as $category)
                    {{-- for single dynamic page --}}

                    <a href="{{ route('home.filteredProducts', ['type' => 'category', 'name' => str_replace(' ', '-', $category->name)]) }}"
                        class="text-decoration-none">
                        <div class="text-center mx-4">
                            <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                                class="img-thumbnail rounded-circle object-fit-cover mb-2"
                                style="width: 150px; height: 150px;">
                            <div class="fw-bold fs-5 text-dark">{{ $category->name }}</div>
                        </div>
                    </a>

                    {{-- for individual page --}}

                    {{-- <a href="{{ route('home.filteredByCategoryProducts', str_replace(' ', '-', $category->name)) }}"
                        class="text-decoration-none">
                        <div class="text-center mx-4">
                            <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                                class="img-thumbnail rounded-circle object-fit-cover mb-2"
                                style="width: 150px; height: 150px;">
                            <div class="fw-bold fs-5 text-dark">{{ $category->name }}</div>
                        </div>
                    </a> --}}
                @endforeach
            </div>
        </marquee>
    </div>
    <!-- Catagories marquee End -->

    <!-- Products Card carousel grouped by category Start -->
    @foreach ($categories as $category)
        <div class="container-fluid text-center mb-5">
            <h1 class="mb-4">{{ $category->name }}</h1>

            <div class="carousel-wrapper position-relative">
                <button class="carousel-btn prevBtn"><i class="bi bi-chevron-left"></i></button>

                <div class="carousel-viewport">
                    <div class="carousel-track">
                        @foreach ($products->where('cat_id', $category->id) as $product)
                            <div class="product-card">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                <div class="card-body bg-primary-subtle text-primary-emphasis">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">Price: <b>{{ $product->price }}</b> BDT</p>
                                    <div class="text-center">
                                        <form action="{{ route('cart.addToCart', $product->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-success">Add to
                                                Cart</button>
                                        </form>

                                        <a href="{{ route('cart.checkout') }}" class="btn btn-outline-danger">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <button class="carousel-btn nextBtn"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    @endforeach
    <!-- Products Card carousel grouped by category End -->


    <!-- Brand Section Start -->
    <div class="container-fluid mt-5">
        <div class="container-fluid text-center">
            <h1 class="mb-4">Brands</h1>
        </div>
        <marquee class="mt-2" scrollamount="10" width="100%" direction="left" height="220px">
            <div class="d-flex">
                @foreach ($brands as $brand)
                    {{-- for single dynamic page --}}

                    <a href="{{ route('home.filteredProducts', ['type' => 'brand', 'name' => str_replace(' ', '-', $brand->name)]) }}"
                        class="text-decoration-none">
                        <div class="text-center mx-4">
                            <img src="{{ $brand->image }}" class="img-thumbnail rounded-circle object-fit-cover mb-2"
                                style="width: 150px; height: 150px;">
                            <div class="fw-bold fs-5 text-dark">{{ $brand->name }}</div>
                        </div>
                    </a>

                    {{-- for individual page --}}

                    {{-- <a href="{{ route('home.filteredByBrandProducts', str_replace(' ', '-', $brand->name)) }}"
                        class="text-decoration-none">
                        <div class="text-center mx-4">
                            <img src="{{ $brand->image }}" class="img-thumbnail rounded-circle object-fit-cover mb-2"
                                style="width: 150px; height: 150px;">
                            <div class="fw-bold fs-5 text-dark">{{ $brand->name }}</div>
                        </div>
                    </a> --}}
                @endforeach
            </div>
        </marquee>
    </div>
    <!-- Brand Section End -->
@endsection
