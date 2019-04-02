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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/master', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contactus');
});

Route::get('/feed', function () {
    return view('userfeed');
});

Route::get('/profilesetting', function () {
    return view('profileSettings');
});