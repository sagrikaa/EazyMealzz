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


Route::get('/contact', function () {
    return view('contactus');
});

Route::get('/feed', function () {
    return view('userfeed');
});

Route::get('/profilesetting', function () {
    return view('profileSettingsnew');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('user', 'UserController@index');
Route::get('/userd', function () {
    return view('/user/user_display');
});
