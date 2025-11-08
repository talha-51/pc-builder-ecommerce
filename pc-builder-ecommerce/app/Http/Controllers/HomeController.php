<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = DB::table('sliders')->get();
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('sub_categories')->get();
        $products = DB::table('products')->get();
        $brands = DB::table('brands')->get();

        return view('home.index', compact('sliders', 'categories', 'subcategories','products','brands'));
    }
}
