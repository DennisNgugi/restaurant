<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('products','ProductController');
Route::apiResource('category','ProductCategoryController');
Route::apiResource('waiter','WaiterController');
Route::apiResource('checkout','CheckoutController');
Route::apiResource('payment_type','PaymentTypeController');

// Admin section analytics
Route::get('/products_count','AdminController@products');
Route::get('/amount','AdminController@amount');
Route::get('/quantity','AdminController@quantity');
Route::get('/reciept','AdminController@reciepts');
Route::get('/reciept','AdminController@reciepts');
Route::get('/reciept/{id}','AdminController@reciept_detail');
Route::get('/today','AdminController@today');
Route::get('/month','AdminController@month');
Route::post('/report','AdminController@report');
Route::get('/report/get','AdminController@report');
Route::get('/waiter_count','AdminController@waiter');
Route::get('/monthly','AdminController@monthly');
// login
Route::post('/login','Auth\LoginController@login');

//search products
Route::get('/product/search','ProductController@search');

//graph

Route::get('/checkout/graph','AdminController@graph');
