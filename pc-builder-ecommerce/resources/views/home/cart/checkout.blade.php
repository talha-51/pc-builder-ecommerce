@extends('layouts.frontend.master')

@section('title')
    Checkout - Order
@endsection

@section('content')
    <div class="text-center mt-5 mb-5">
        <h1 class="text-center mb-4">Welcome to Checkout Page.</h1>
        <form action="{{ route('cart.confirmOrder') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Order NOW!</button>
        </form>
    </div>
@endsection
