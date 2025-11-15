@extends('layouts.frontend.master')

@section('title')
    Checkout -Cart
@endsection

@section('content')
    <div class="mt-5 mb-5">
        <h1 class="text-center mb-5">Welcome to Your Cart.</h1>

        @if ($cartProducts->isEmpty())
            <h2 class="text-center mb-4">Cart is empty.</h2>
            <div class="d-flex justify-content-center">
                <div class="d-grid gap-2 text-center w-50">
                    <a href="{{ route('home.index') }}" class="btn btn-lg btn-primary">Shop Now!</a>
                </div>
            </div>
        @else
            <div class="d-flex justify-content-center">
                <table class="table table-bordered w-75">
                    <tr>
                        <th>SL</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($cartProducts as $cartProduct)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ optional($products->firstWhere('id', $cartProduct->product_id))->name }}</td>
                            <td>{{ $cartProduct->quantity }}</td>
                            <td>{{ $cartProduct->unit_price }}</td>
                            <td>{{ $cartProduct->total_price }}</td>
                            <td>
                                <a href=""><button class="btn btn-outline-warning">Change</button></a>
                                <form action="" method="POST" class="d-inline">
                                    @csrf @method('delete')
                                    <button type="submit" class="btn btn-outline-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <hr>
                        <td>
                            Sub-Total: <strong>{{ $cartProducts->sum('total_price') }}</strong><br>
                        </td>
                        <td>
                            <div class="d-grid gap-2">
                                <a href="{{ route('cart.checkout') }}" class="btn btn-outline-primary">Checkout</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        @endif
    </div>
@endsection
