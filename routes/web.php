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
    return redirect('pizza/');
});

Route::resource('pizza','PizzaController');
Route::get('/carts/{user}','CartController@show');
Route::put('/carts/{cart}','CartController@update')->name('carts.update');
Route::post('/carts','CartController@store')->name('carts.store');
Route::resource('order','OrderController');

Route::get('/order/history/{user}','OrderController@history')->name('order.history');

Route::delete('/carts/{cart}','CartController@destroy')->name('carts.destroy');
Auth::routes();

