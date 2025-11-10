@extends('layouts.frontend.master')

@section('title')
    {{-- {{ $subcategories->name }} --}}
@endsection

@section('logo')
    @if (!$settings)
        <img src="{{ asset('images/logos/Image_not_available.png') }}" alt="logo" style="width: 150px; height: 70px;">
    @else
        <img src="{{ asset($settings->logo) }}" alt="logo" style="width: 150px; height: 70px;">
    @endif
@endsection


@section('company_name')
    @if (!$settings)
    @else
        {{ $settings->company_name }}
    @endif
@endsection

@section('email')
    @if (!$settings)
    @else
        {{ $settings->email }}
    @endif
@endsection

@section('contact_no')
    @if (!$settings)
    @else
        {{ $settings->contact_no }}
    @endif
@endsection

@section('content')
    <div class="container text-center mb-5">
        <h1 class="mb-4">{{ $subcategories->name }}</h1>

        <div class="row">
            @foreach ($filteredBySubCategoryProducts as $product)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body bg-light">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }}</p>
                            <div class="text-center">
                                <button class="btn btn-sm btn-outline-success">Add to Cart</button>
                                <button class="btn btn-sm btn-danger">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
