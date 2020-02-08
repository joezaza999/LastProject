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

Route::get('/home','ShowhomeController@index')->name('home');
Route::get('/form','ShowformController@index')->name('form');
Route::get('/success','ShowsuccessController@index')->name('success');
Route::get('/success/show/{id}','ShowsuccessController@show');
Route::get('/student','ShowstudentController@index')->name('student');
Route::get('/apprentice','ShowapprenticeController@index')->name('apprentice');
Route::get('/course','ShowcourseController@index')->name('course');
Route::get('/tact','PagesController@tact')->name('tact');
Route::get('/activities','ShowactivitiesController@index')->name('activities');
Route::get('/activities/show/{id}','ShowactivitiesController@show');
Route::get('/cooperative','ShowcooperativeController@index')->name('cooperative');
Route::get('/newsupdate','ShownewsupdateController@index')->name('newsupdate');
Route::get('/newsupdate/show/{id}','ShownewsupdateController@show');
Route::get('/about','ShowaboutController@index')->name('about');
Route::get('/award','ShowawardController@index')->name('award');
Route::get('/award/show/{id}','ShowawardController@show');


Auth::routes();

Route::get('/bhome', 'HomeController@index')->name('bhome');
Route::get('status/{id}','HomeController@status')->name('status');
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
Route::resource('/bstudent','StudentController')->name('index','bstudent');
Route::resource('/bstudentyear','StudentyearController')->name('index','bstudentyear');
Route::resource('/bcategory','CategoryController')->name('index','bcategory');
Route::resource('/bsubgroup','SubgroupController')->name('index','bsubgroup');
Route::resource('/bsubject','SubjectController')->name('index','bsubject');





