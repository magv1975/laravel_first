<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('Home');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/product', function () {
    return view('Product');
});

Route::get('/order', function () {
    return view('Order');
});

Route::get('/contact', function () {
    return view('Contact');
});

