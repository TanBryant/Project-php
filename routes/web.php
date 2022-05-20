<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHome;
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
Route::get('/Zayshop', [ControllerHome::class, 'index']);
Route::get('/Zayshop/shop', [ControllerHome::class, 'shop']);
Route::get('/Zayshop/shop/shop-single', [ControllerHome::class, 'shop_single']);
