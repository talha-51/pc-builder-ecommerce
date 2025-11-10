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
        $settings = DB::table('settings')->first();
        // $settings = DB::table('settings')->orderBy('id', 'desc')->first();

        return view('home.index', compact('sliders', 'categories', 'subcategories','products','brands', 'settings'));
    }

    public function filteredByCategoryProducts($name, $id)
    {
        $categories = DB::table('categories')->where('id', $id)->first();
        $subcategories = DB::table('sub_categories')->get();
        $settings = DB::table('settings')->first();

        $filteredByCategoryProducts = DB::table('products')->where('cat_id', $id)->get();

        return view('home.filteredByCategoryProducts', compact('categories', 'subcategories', 'settings' ,'filteredByCategoryProducts'));
    }

    public function filteredBySubCategoryProducts($sub, $id)
    {
        $subcategories = DB::table('sub_categories')->where('id', $id)->first();
        $settings = DB::table('settings')->first();

        $filteredBySubCategoryProducts = DB::table('products')->where('sub_id', $id)->get();

        return view('home.filteredBySubCategoryProducts', compact('subcategories', 'settings' ,'filteredBySubCategoryProducts'));
    }
}
