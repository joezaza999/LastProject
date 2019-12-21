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
     return view('auth.login');
 });

Route::get('/home','PagesController@home');
Route::get('/member','PagesController@member');
Route::get('/course','PagesController@course');
Route::get('/tact','PagesController@tact');
Route::get('/test','PagesController@test');
Route::get('/com','PagesController@com');
Route::get('/activities','PagesController@activities');
Route::get('/cooperative','PagesController@cooperative');
Route::get('/newupdate','PagesController@newupdate');
Route::get('/about','PagesController@about');
Route::get('/award','PagesController@award');
Route::get('/fund','PagesController@fund');

Auth::routes();

Route::get('/bhome', 'HomeController@index')->name('bhome');
Route::get('/position', 'PositionController@index')->name('position');
Route::get('/position/destroy/(id)', 'PositionController@destroy');
