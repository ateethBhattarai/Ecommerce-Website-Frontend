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

Route::get('/', function () {
    return view('user.home');
});

Route::get('/categories', function () {
    return view('user.categories');
})->name('categories');

Route::get('/subcategories', function () {
    return view('user.sub_categories');
})->name('subcategories');

Route::get('/brand', function () {
    return view('user.brand');
})->name('brand');

Route::get('/product', function () {
    return view('user.product');
})->name('product');

Route::get('/productdetails', function () {
    return view('user.product_details');
})->name('productdetails');

Route::get('/test', function () {
    return view('user.try');
})->name('test');
