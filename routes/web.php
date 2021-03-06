<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', "master");
Route::view('/shop', "shop");
Route::get('/shop/product/{id}',function($id) {
    return view("detail", [
        "nama" => $id
    ]);
});
Route::view('/login', "login");
Route::view('/register', "register");
Route::view('/shop/cart', "cart");

