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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','PagesController@home');
Route::get('/member','PagesController@member');
Route::get('/course','PagesController@course');
Route::get('/tact','PagesController@tact');
Route::get('/test','PagesController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
