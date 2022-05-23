<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\userController;
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
Route::get('/Zayshop', [ControllerHome::class, 'index']);
Route::get('/Zayshop/about', [ControllerHome::class, 'about']);
Route::get('/Zayshop/shop', [ControllerHome::class, 'shop']);
Route::get('/Zayshop/contact', [ControllerHome::class, 'contact']);
Route::get('/Zayshop/shop/shop-single', [ControllerHome::class, 'shop_single']);
Route::get('/Zayshop/login', [LoginController::class, 'viewLogin']);


//-- route admin
Route::get('/Admin', [ControllerAdmin::class, 'indexAdmin']);
Route::get('/Admin/formAdd', [ControllerAdmin::class, 'formAdd']);
Route::get('/Admin/table', [userController::class, 'tableList']);
Route::post('/Admin/store', [userController::class, 'store']);
Route::get('/Admin/{id}/edit', [userController::class, 'edit']);
Route::put('/Admin/{id}', [userController::class, 'update']);
