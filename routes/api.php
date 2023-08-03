<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'products','namespace' => 'App\Http\Controllers\API\Product'],function(){

    Route::get('','IndexController')->name('product.index');

    Route::get('filters','FilterListController')->name('product.filters');
//
//    Route::get('create','CreateController')->name('product.create');
//
//    Route::post('store','StoreController')->name('product.store');
//
    Route::get('{product}', 'ShowController')->name('product.show');
//
//    Route::get('{product}/edit','EditController')->name('product.edit');
//
//    Route::put('{product}/update','UpdateController')->name('product.update');
//
//    Route::delete('{product}/delete', 'DeleteController')->name('product.delete');

});
