<?php

namespace App\Http\Controllers;

class ControllerHome extends Controller
{
    public function index()
    {
        return view('Zayshop.index');
    }
    public function shop()
    {
        return view('Zayshop.shop');
    }
    public function shop_single()
    {
        return view('Zayshop.shop-single');
    }
}
