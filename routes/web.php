<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/home','ShowhomeController@index');
Route::get('/form','ShowformController@index');
Route::get('/success','ShowsuccessController@index');
Route::get('/student','ShowstudentController@index');
Route::get('/apprentice','ShowapprenticeController@index');
Route::get('/course','ShowcourseController@index');
Route::get('/tact','PagesController@tact');
Route::get('/test','PagesController@test');
Route::get('/activities','ShowactivitiesController@index');
Route::get('/activities/show/{id}','ShowactivitiesController@show');
Route::get('/cooperative','ShowcooperativeController@index');
Route::get('/newsupdate','ShownewsupdateController@index');
Route::get('/about','ShowaboutController@index');
Route::get('/award','ShowawardController@index');
Route::get('/uploadactivities','ActivitiesController@index');


Auth::routes();

Route::get('/bhome', 'HomeController@index')->name('bhome');
// Route::get('/position', 'PositionController@index')->name('position');
// Route::get('/position/destroy/(id)', 'PositionController@destroy');
Route::resource('/bposition','PositionController')->name('index','bposition');
Route::resource('/bmembers','MemberController')->name('index','bmembers');
Route::resource('/bcourse','CourseController')->name('index','bcourse');
Route::resource('/babout','AboutController')->name('index','babout');
Route::resource('/bactivities','ActivitiesController')->name('index','bactivities');
Route::resource('/bcooperative','CooperativeController')->name('index','bcooperative');
Route::resource('/baward','AwardController')->name('index','baward');
Route::resource('/bnewsupdate','NewsupdateController')->name('index','bnewsupdate');
Route::resource('/bactivities','ActivitiesController')->name('index','bactivities');
Route::resource('/bslideshow','SlideshowController')->name('index','bslideshow');
Route::resource('/bapprentice','ApprenticeController')->name('index','bapprentice');
Route::resource('/bsuccess','SuccessController')->name('index','bsuccess');
Route::resource('/bform','FormController')->name('index','bform');


