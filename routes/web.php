<?php

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
    return redirect('products');
});

Route::get('/products',array('as'=>'home', 'uses' => 'ProductsController@index'));
Route::get('/products/new','ProductsController@create');
Route::post('/products','ProductsController@store');
Route::get('/products/{product}','ProductsController@show');

Route::get('/orders/show','OrdersController@index');
Route::get('/orders','OrdersController@create');
Route::post('/orders','OrdersController@store');

Route::get('/pages','PagesController@index');
Route::get('/pages/new','PagesController@create');
Route::post('/pages','PagesController@store');

Route::get('/login','LoginController@create');
Route::post('/login','LoginController@store');
Route::get('/logout','LoginController@destroy');

Route::get('/registration','RegistrationController@create');
Route::post('/registration','RegistrationController@store');

Route::get('/cart_add/{product}','CartController@add');
Route::get('/cart_minus/{product}','CartController@minus');


Route::get('/{page}','PagesController@show');//for static pages

