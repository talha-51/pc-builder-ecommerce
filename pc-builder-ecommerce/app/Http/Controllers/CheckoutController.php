<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\View;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('home.checkout.index');
    }

    public function confirmOrder()
    {
        DB::table('carts')->where('user_id', Auth::user()->id)->delete();

        return redirect()->route('home.index')->with('success', 'Order Complete!');;
    }

    // Add to Cart
    public function addToCart($id)
    {
        $product = DB::table('products')->where('id', $id)->first();

        DB::table('carts')->insert([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            'quantity' => 1,
            'unit_price' => $product->price,
            'total_price' => $product->price,
            'created_at' => date('Y/m/d H:i:s'),
        ]);

        return back()->with('success', 'Product added to cart!');
    }
}
