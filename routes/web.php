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
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/insert-post','PostController@store');
Route::get('/all-post','PostController@AllPost')->name('all.posts');
Route::get('/delete-post/{id}','PostController@Delete');
Route::get('/edit-post/{id}','PostController@Edit');
Route::post('/update-post/{id}','PostController@Update');