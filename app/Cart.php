<?php
namespace App;
class Cart{
    public $products= null;
    public $totalPrice= 0;
    public $totalQuantity= 0;
    public function __constant($cart){
        if($cart){
            $this->products=$cart->products;
            $this->totalPrice=$cart->totalPrice;
            $this->totalQuantity=$cart->totalQuantity;
        }
    }
    public function AddCart($products,$id){
        $newProduct =['quantity'=>0,'price'=>$products->price,'productInfo'=>$products];
                if($this->$products){
                    if(array_key_exists($id,$products)){
                            $newProduct=$products[$id];
                    }
                }
                $newProduct['quantity']++;
                $newProduct['productInfo']=$newProduct['quantity']*$products->price;
                $this->$products[$id]=$newProduct;
                $this->totalPrice+=$products->price;
                $this->totalQuantity++;

    }
}