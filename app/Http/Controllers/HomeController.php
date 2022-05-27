<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller

{
    public function index()
    {
        $categories = Category::all();
        return view('Zayshop.index')->with('categories', $categories);;
    }
    public function shop()
    {
        return view('Zayshop.shop');
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
