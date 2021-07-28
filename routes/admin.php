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
    return view('admin.dashboard');
})->name('dashboard');

Route::name('category.')->prefix('category')->group(function () {
    Route::get('/', 'CategoryController@index')->name('list');
    Route::get('/create', 'CategoryController@create')->name('add');
    Route::post('/create', 'CategoryController@store')->name('store');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
    Route::post('/edit/{id}', 'CategoryController@update')->name('update');
    Route::get('/destroy/{id}', 'CategoryController@destroy')->name('destroy');
    Route::get('/{slug}', 'CategoryController@show')->name('show');
});
