<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class UserController extends Controller
{
    public function userList()
    {
        $user = User::all();
        return view('Admin.pages.tables.userTable')->with('user', $user);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|max:255'
        ]);
        User::create($request->all());
        return redirect()->back();
    }


    public function edit($id)
    {

        $user = User::find($id);
        //dd($user);
        return view('Admin.pages.forms.edit', compact(['user']));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('/Admin/userTable');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        if ($user)
            $user->delete();
        return redirect('/Admin/userTable');
    }

    /// controller product4
    
    public function viewProduct()
    {   
            $category = Category::all();  
        return view('Admin.pages.forms.addProduct')->with('category', $category);
    }
    public function productList()
    {
        $product = Product::all();
        return view('Admin.pages.tables.productTable')->with('product', $product);
    }
    
    public function insertProduct(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:255',
            'img' => 'required',
            'price' => 'required|max:255',
            'category_id' => 'required|max:255',
        ]);
        Product::create($request->all());
        return redirect()->back();
    }
    public function editProduct($id)
    {

        $product = Product::find($id);
        //dd($user);
        return view('Admin.pages.forms.editProduct', compact(['product']));
    }
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if ($product)
        $product->delete();
        return redirect('/Admin/productTable');
    }

}
