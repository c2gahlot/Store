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
    return view('welcome');
});

Route::auth();

Route::get('home', 'HomeController@index');

Route::get('product/create','ProductController@create');

Route::get('product/{id}', 'ProductController@show');

Route::post('cart', ['middleware' => 'auth','uses' => 'CartController@store']);

Route::get('cart', ['middleware' => 'auth','uses' => 'CartController@index']);

Route::delete('cart/{id}', ['middleware' => 'auth','uses' => 'CartController@destroy']);

Route::post('orderproduct', 'OrderProductController@store');

Route::get('orderproduct' , 'OrderProductController@index');

Route::get('order/{id}', 'OrderController@show');

Route::get('order', ['middleware' => 'auth','uses' => 'OrderController@index']);

Route::post('review', ['middleware' => 'auth','uses' => 'ReviewController@store']);

Route::get('review', ['middleware' => 'auth','uses' => 'ReviewController@index']);

Route::post('product', 'ProductController@store');

Route::get('user', 'UserController@index');