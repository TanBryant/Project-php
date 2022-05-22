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
}
