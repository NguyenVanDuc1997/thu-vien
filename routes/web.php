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

Route::get('login','UserController@login')->name('login');

Route::prefix('/library')->group(function (){
    Route::get('/index','LibraryController@index')->name('library.index');
    Route::get('/create','LibraryController@create')->name('library.create');
    Route::post('/store','LibraryController@store')->name('library.store');
    Route::get('/{id}/edit','LibraryController@edit')->name('library.edit');
    Route::post('/{id}/update','LibraryController@update')->name('library.update');
    Route::get('/{id}/destroy','LibraryController@destroy')->name('library.destroy');
});

Route::prefix('/category-book')->group(function (){
    Route::get('/index','CategoryController@index')->name('category.book.index');
    Route::get('/create','CategoryController@create')->name('category.book.create');
});
