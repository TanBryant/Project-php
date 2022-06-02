<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Zayshop', [HomeController::class, 'index']);
Route::get('/Zayshop/about', [HomeController::class, 'about']);
Route::get('/Zayshop/shop', [HomeController::class, 'shop']);
Route::get('/Zayshop/cart', [HomeController::class, 'cartView']);
Route::get('/Zayshop/contact', [HomeController::class, 'contact']);
Route::get('/Zayshop/shop/shop-single', [HomeController::class, 'shop_single']);


//--route login
Route::get('/Zayshop/login', [LoginController::class, 'viewLogin']);
Route::get('/login', [LoginController::class, 'AdminLogin']);


//-- route admin
Route::get('/Admin', [AdminController::class, 'indexAdmin']);
Route::get('/Admin/formAdd', [AdminController::class, 'formAdd']);


//--route user
Route::get('/Admin/userTable', [UserController::class, 'userList']); 
Route::post('/Admin/store', [UserController::class, 'store']); 
Route::get('/Admin/{id}/edit', [UserController::class, 'edit']);
Route::put('/Admin/{id}', [UserController::class, 'update']);
Route::delete('/Admin/user/{id}', [UserController::class, 'destroy']);


//--route product
Route::get('/Admin/addProduct', [UserController::class, 'viewProduct']);
Route::get('/Admin/productTable', [UserController::class, 'productList']);
Route::get('/Admin/{id}/editProduct', [UserController::class, 'editProduct','viewProduct']);
Route::post('/Admin/insertProduct', [UserController::class, 'insertProduct']);
Route::delete('/Admin/productTable/{id}', [UserController::class, 'deleteProduct']);