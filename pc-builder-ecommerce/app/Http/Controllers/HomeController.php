<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // protected $settings;

    // public function __construct()
    // {
    //     $this->settings = DB::table('settings')->first();
    //     // $this->settings = DB::table('settings')->orderBy('id', 'desc')->first();

    //     // Share it with all views returned by this controller
    //     View::share('settings', $this->settings);
    // }

    public function index()
    {
        $sliders = DB::table('sliders')->get();
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('sub_categories')->get();
        $products = DB::table('products')->get();
        $brands = DB::table('brands')->get();

        return view('home.index', compact('sliders', 'categories', 'subcategories', 'products', 'brands'));
    }


    // for individual page

    // public function filteredByCategoryProducts($name)
    // {
    //     $name = Str::of($name)->replace('-', ' ');
    //     $category = DB::table('categories')->where('name', $name)->first();
    //     $subcategories = DB::table('sub_categories')->get();

    //     $filteredByCategoryProducts = DB::table('products')
    //         ->where('cat_id', $category->id)
    //         ->get();

    //     return view('home.filteredByCategoryProducts', compact('category', 'subcategories', 'filteredByCategoryProducts'));
    // }

    // public function filteredBySubCategoryProducts($name)
    // {
    //     $name = Str::of($name)->replace('-', ' ');
    //     $subcategory = DB::table('sub_categories')->where('name', $name)->first();

    //     $filteredBySubCategoryProducts = DB::table('products')
    //         ->where('sub_id', $subcategory->id)
    //         ->get();

    //     return view('home.filteredBySubCategoryProducts', compact('subcategory', 'filteredBySubCategoryProducts'));
    // }

    // public function filteredByBrandProducts($name)
    // {
    //     $name = Str::of($name)->replace('-', ' ');
    //     $brand = DB::table('brands')->where('name', $name)->first();

    //     $filteredByBrandProducts = DB::table('products')
    //         ->where('brand_id', $brand->id)
    //         ->get();

    //     return view('home.filteredByBrandProducts', compact('brand', 'filteredByBrandProducts'));
    // }


    // single page dynamic

    public function filteredProducts($type, $name)
    {
        // Convert hyphens back to spaces
        $name = Str::of($name)->replace('-', ' ');

        $filteredProducts = collect();
        $title = '';
        $subcategories = collect();
        $mainData = null; // will hold category / subcategory / brand info

        switch ($type) {
            case 'category':
                $mainData = DB::table('categories')->where('name', $name)->first();
                if ($mainData) {
                    $filteredProducts = DB::table('products')
                        ->where('cat_id', $mainData->id)
                        ->get();

                    // fetch subcategories for marquee
                    $subcategories = DB::table('sub_categories')
                        ->where('cat_id', $mainData->id)
                        ->get();

                    $title = $mainData->name;
                }
                break;

            case 'sub-category':
                $mainData = DB::table('sub_categories')->where('name', $name)->first();
                if ($mainData) {
                    $filteredProducts = DB::table('products')
                        ->where('sub_id', $mainData->id)
                        ->get();

                    $title = $mainData->name;
                }
                break;

            case 'brand':
                $mainData = DB::table('brands')->where('name', $name)->first();
                if ($mainData) {
                    $filteredProducts = DB::table('products')
                        ->where('brand_id', $mainData->id)
                        ->get();

                    $title = $mainData->name;
                }
                break;

            default:
                abort(404);
        }

        if (!$mainData) {
            abort(404);
        }

        return view('home.filteredProducts', compact(
            'type',
            'title',
            'mainData',
            'filteredProducts',
            'subcategories'
        ));
    }
}
