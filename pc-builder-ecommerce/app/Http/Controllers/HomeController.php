<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    protected $settings;

    public function __construct()
    {
        $this->settings = DB::table('settings')->first();
        // $this->settings = DB::table('settings')->orderBy('id', 'desc')->first();

        // Share it with all views returned by this controller
        View::share('settings', $this->settings);
    }

    public function index()
    {
        $sliders = DB::table('sliders')->get();
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('sub_categories')->get();
        $products = DB::table('products')->get();
        $brands = DB::table('brands')->get();

        return view('home.index', compact('sliders', 'categories', 'subcategories', 'products', 'brands'));
    }

    public function filteredByCategoryProducts($name)
    {
        $name = Str::of($name)->replace('-', ' ');

        $category = DB::table('categories')->where('name', $name)->first();
        $subcategories = DB::table('sub_categories')->get();

        $filteredByCategoryProducts = DB::table('products')
            ->where('cat_id', $category->id)
            ->get();

        return view('home.filteredByCategoryProducts', compact('category', 'subcategories', 'filteredByCategoryProducts'));
    }

    public function filteredBySubCategoryProducts($name)
    {
        $subcategory = DB::table('sub_categories')->where('name', $name)->first();

        $filteredBySubCategoryProducts = DB::table('products')
            ->where('sub_id', $subcategory->id)
            ->get();

        return view('home.filteredBySubCategoryProducts', compact('subcategory', 'filteredBySubCategoryProducts'));
    }
}
