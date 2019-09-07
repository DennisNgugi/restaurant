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
    return view('layouts.restaurant');
});

Route::get('/login', function () {
    return view('layouts.login');
});
// Route::get('/admin','AdminController@index');
// Route::resource('products','ProductController');
// Route::resource('product_category','ProductCategoryController');
// Route::resource('waiter','WaiterController');
Route::get('/admin/{any}', function () {
  return view('layouts.admin');
})->where('any', '.*');
