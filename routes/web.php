<?php

use Illuminate\Support\Facades\DB;

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
    return view('/home');
});

//rutas con acceso para usuarios registrados

Route::middleware('auth')->group(function() {
  Route::get('/products/create', 'ProductsController@create')
  ->name('products.create');
  Route::get('/products/{product}/edit', 'ProductsController@edit')
  ->name('products.edit');
  Route::delete('/products/{product}', 'ProductsController@destroy')
  ->name('products.destroy');
  Route::get('/profile', 'HomeController@profile')->name('profile');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/products/search', 'ProductsController@search')->name('products.search');
Route::get('/products/result', 'ProductsController@result')->name('products.result');
Route::resource('users', 'UsersController');
Route::resource('products', 'ProductsController')->except('create', 'edit', 'destroy');
Route::resource('sizes', 'SizesController');
