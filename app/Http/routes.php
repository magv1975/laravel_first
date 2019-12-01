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

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/product', 'ProductController@index');

Route::get('/order', 'OrderController@index');

Route::get('/contact', 'ContactController@index');


Route::auth();

Route::get('/home', 'HomeController@index');
