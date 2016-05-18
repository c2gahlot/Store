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

Route::get('home', ['middleware' => 'auth','uses' => 'HomeController@index']);

Route::post('product', ['middleware' => 'auth','uses' => 'ProductController@store']);

Route::get('product/create', ['middleware' => 'auth','uses' => 'ProductController@create']);

Route::get('product/{id}', ['middleware' => 'auth','uses' => 'ProductController@show']);

Route::get('cart', ['middleware' => 'auth','uses' => 'CartController@index']);

Route::post('cart', ['middleware' => ['auth', 'purchase'],'uses' => 'CartController@store']);

Route::delete('cart/{id}', ['middleware' => 'auth','uses' => 'CartController@destroy']);

Route::post('orderproduct', ['middleware' => 'auth','uses' => 'OrderProductController@store']);

Route::get('order/{id}', ['middleware' => 'auth','uses' => 'UserController@show']);

Route::post('order/{id}', ['middleware' => 'auth','uses' => 'UserController@store']);

Route::get('review', ['middleware' => 'auth','uses' => 'ReviewController@index']);

Route::post('review', ['middleware' => 'auth','uses' => 'ReviewController@store']);

Route::delete('review/{id}', ['middleware' => 'auth','uses' => 'ReviewController@destroy']);

Route::get('user', ['middleware' => 'auth','uses' => 'UserController@index']);