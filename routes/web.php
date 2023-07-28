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

Route::group(['prefix' => 'colors','namespace' => 'App\Http\Controllers\Color'],function(){

    Route::get('','IndexController')->name('color.index');

    Route::get('create','CreateController')->name('color.create');

    Route::post('store','StoreController')->name('color.store');

    Route::get('{color}', 'ShowController')->name('color.show');

    Route::get('{color}/edit','EditController')->name('color.edit');

    Route::put('{color}/update','UpdateController')->name('color.update');

    Route::delete('{color}/delete', 'DeleteController')->name('color.delete');

});


Route::group(['prefix' => 'products','namespace' => 'App\Http\Controllers\Product'],function(){

    Route::get('','IndexController')->name('product.index');

    Route::get('create','CreateController')->name('product.create');

    Route::post('store','StoreController')->name('product.store');

    Route::get('{product}', 'ShowController')->name('product.show');

    Route::get('{product}/edit','EditController')->name('product.edit');

    Route::put('{product}/update','UpdateController')->name('product.update');

    Route::delete('{product}/delete', 'DeleteController')->name('product.delete');

});

Route::group(['prefix' => 'groups','namespace' => 'App\Http\Controllers\Group'],function(){

    Route::get('','IndexController')->name('group.index');

    Route::get('create','CreateController')->name('group.create');

    Route::post('store','StoreController')->name('group.store');

    Route::get('{group}', 'ShowController')->name('group.show');

    Route::get('{group}/edit','EditController')->name('group.edit');

    Route::put('{group}/update','UpdateController')->name('group.update');

    Route::delete('{group}/delete', 'DeleteController')->name('group.delete');

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

Route::group(['prefix' => 'users','namespace' => 'App\Http\Controllers\User'],function(){

    Route::get('','IndexController')->name('user.index');

    Route::get('create','CreateController')->name('user.create');

    Route::post('store','StoreController')->name('user.store');

    Route::get('{user}', 'ShowController')->name('user.show');

    Route::get('{user}/edit','EditController')->name('user.edit');

    Route::put('{user}/update','UpdateController')->name('user.update');

    Route::delete('{user}/delete', 'DeleteController')->name('user.delete');

});


