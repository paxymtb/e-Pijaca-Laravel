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
    return view('index');
});


Route::get('product-listings', function()
{
    //
    return View::make('product-listings');
});

Route::get('about', function()
{
    //
    return View::make('about');
});

Route::get('contact', function()
{
    //
    return View::make('contact');
});

Route::get('post-product', function()
{
    //
    return View::make('post-product');
});

Route::get('login', function()
{
    //
    return View::make('login');
});

Route::get('product-single', function()
{
    //
    return View::make('product-single');
});
