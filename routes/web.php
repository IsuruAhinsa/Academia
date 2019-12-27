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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index')->name('index');
Route::get('courses/{slug}', 'CourseController@index')->name('courses.index');
Route::get('news', 'NewsController@index')->name('news.index');
Route::get('news/{id}', 'NewsController@show')->name('news.show');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
