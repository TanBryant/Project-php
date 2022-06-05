<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
class CartController extends Controller
{
    
    public function AddCart($id){ 
       

    }
    public function viewCart()
    {
        return view('Zayshop.cart.cartDetail');
    }
    public function findProduct($id)
    {
        $product = Product::all(); 
        $product = Product::find($id);
        //dd($user);
        return view('Zayshop.shop-single', compact(['product']))->with('product', $product);
    }                       
}
