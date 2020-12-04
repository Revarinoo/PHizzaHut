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

Route::group(['middleware'=>'admin'],function (){
    Route::get('/users','UserController@index')->name('users.index');
    Route::get('delete/{pizza}','PizzaController@delete')->name('pizza.delete');
    Route::get('update/{pizza}','PizzaController@edit')->name('pizza.edit');
    Route::put('update/{pizza}','PizzaController@update');
});

//validasi biar gabisa asal tembak link
Route::group(['middleware'=>'member'],function (){
    Route::get('/order/history/{user}','OrderController@history')->name('order.history');
    Route::get('/carts/{user}','CartController@show');
    Route::put('/carts/{cart}','CartController@update')->name('carts.update');
    Route::post('/carts','CartController@store')->name('carts.store');
    Route::resource('order','OrderController');
    Route::delete('/carts/{cart}','CartController@destroy')->name('carts.destroy');
    Route::get('/orderdetails/{order}','OrderController@show');
});



Route::resource('pizza','PizzaController');

Auth::routes();

