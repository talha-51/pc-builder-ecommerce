@extends('layouts.frontend.master')

@section('title')
    Checkout - Order
@endsection

@section('content')
    <div class="mb-5 p-5">
        <h1 class="text-center mb-5">Welcome to Checkout Page.</h1>
        {{-- <form action="{{ route('cart.confirmOrder') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Order NOW!</button>
        </form> --}}

        <form method="POST" action="">
            @csrf
            <div class="container-fluid">
                <div class="row g-5">
                    <div class="col-4">
                        <h1 class="mb-5">Customer Information</h1>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                            @error('name')
                                <div class="alert alert-danger mt-2 text-center">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('email')
                                <div class="alert alert-danger mt-2 text-center">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        @error('address')
                            <div class="alert alert-danger mt-2 text-center">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Delivery Location</label>
                            <select class="form-select" aria-label="Default select example" id="deliveryLocation">
                                <option value="60">Inside Dhaka (Total + 60)</option>
                                <option value="120">Outside Dhaka (Total + 120)</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-8 ps-5">
                        <h1 class="text-center mb-5">Ordered Items</h1>
                        <table class="table">
                            <tr>
                                <th>SL</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                            </tr>
                            @foreach ($cartProducts as $cartProduct)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ optional($products->firstWhere('id', $cartProduct->product_id))->name }}</td>
                                    <td>
                                        <img src="{{ asset($products->firstWhere('id', $cartProduct->product_id)->image) }}"
                                            alt="" class="img-thumbnail" width="75">
                                    </td>
                                    <td>{{ $cartProduct->quantity }}</td>
                                    <td>{{ $cartProduct->unit_price }}</td>
                                    <td>{{ $cartProduct->total_price }}</td>
                                </tr>
                            @endforeach

                            <tr>
                                <td colspan="6" class="text-end">
                                    Sub-Total:
                                    <strong id="subTotal">{{ $cartProducts->sum('total_price') }}</strong> +
                                    <strong id="deliveryCharge">60</strong> [Delivery Charge]<br>
                                    <h5>Grand Total: <strong
                                            id="grandTotal">{{ $cartProducts->sum('total_price') + 60 }}</strong></h5>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('cart.index') }}" class="btn btn-warning">Go back to Cart</a>

                <button type="submit" class="btn btn-primary">Order Now</button>
            </div>
        </form>
    </div>
    <script>
        const deliverySelect = document.getElementById('deliveryLocation');
        const subTotal = parseFloat(document.getElementById('subTotal').innerText);

        deliverySelect.addEventListener('change', function() {
            let deliveryCharge = parseFloat(this.value);
            let grandTotal = subTotal + deliveryCharge;

            document.getElementById('deliveryCharge').innerText = deliveryCharge;
            document.getElementById('grandTotal').innerText = grandTotal;
        });
    </script>
@endsection
