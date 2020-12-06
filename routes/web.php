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

    Route::get('/users','UserController@index')->name('users.index');


    Route::get('pizza/{pizza}/delete','PizzaController@delete')->name('pizza.delete');


    Route::get('/carts/{user}','CartController@show')->name('carts.show');
    Route::put('/carts/{cart}','CartController@update')->name('carts.update');
    Route::post('/carts','CartController@store')->name('carts.store');
    Route::resource('order','OrderController');
    Route::delete('/carts/{cart}','CartController@destroy')->name('carts.destroy');
    Route::post('/carts/{user}/checkout','CartController@checkout');

    Route::get('/orderdetails/{order}','OrderController@show')->name('order.detail');
    Route::resource('pizza','PizzaController');

    Route::get('/history/{user}','UserController@history')->name('user.history');
    Route::get('/transaction','OrderController@transaction')->name('order.transaction');

    Auth::routes();

