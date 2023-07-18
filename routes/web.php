<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'cabinet','namespace' => 'App\Http\Controllers\Main'],function (){

    Route::get('','IndexController')->name('cabinet.main');

});

Route::group(['prefix' => 'categories','namespace' => 'App\Http\Controllers\Category'],function(){

    Route::get('','IndexController')->name('category.index');

    Route::get('create','CreateController')->name('category.create');

    Route::post('store','StoreController')->name('category.store');

    Route::get('{category}', 'ShowController')->name('category.show');

    Route::get('{category}/edit','EditController')->name('category.edit');

    Route::put('{category}/update','UpdateController')->name('category.update');

    Route::delete('{category}/delete', 'DeleteController')->name('category.delete');

});

Route::group(['prefix' => 'tags','namespace' => 'App\Http\Controllers\Tag'],function(){

    Route::get('','IndexController')->name('tag.index');

    Route::get('create','CreateController')->name('tag.create');

    Route::post('store','StoreController')->name('tag.store');

    Route::get('{tag}', 'ShowController')->name('tag.show');

    Route::get('{tag}/edit','EditController')->name('tag.edit');

    Route::put('{tag}/update','UpdateController')->name('tag.update');

    Route::delete('{tag}/delete', 'DeleteController')->name('tag.delete');

});


