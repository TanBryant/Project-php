<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller

{
    public function index()
    {
        $categories = Category::all();
        return view('Zayshop.index')->with('categories', $categories);
    }
    public function shop()
    {$product = Product::all();
        return view('Zayshop.shop')->with('product', $product);
    }
    public function about()
    {
        return view('Zayshop.about');
    }

    public function shop_single()
    {
        return view('Zayshop.shop-single');
    }
    public function contact()
    {
        return view('Zayshop.contact');
    }

    ////

}
