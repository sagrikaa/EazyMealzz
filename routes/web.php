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

//Home page route
Route::get('/home', 'HomeController@index')->name('home');

//Contacts page
Route::get('/contact', function () {
    return view('contactus');
});

//User Home profile page
Route::get('/userhome', 'PostController@index');

//User Feed Page
Route::get('userfeed', 'PostController@userfeed');

Route::get('/feed', function () {
    return view('/user/user_feed');
});

//User Profile Settings Route
Route::get('/profilesetting', function () {
    return view('/user/profile_settings_new');
});

//Admin Home
Route::get('/admin', function () {
    return view('admin');
});

//Admin Home->User display
Route::get('user', 'UserController@index');
Route::get('/userd', function () {
    return view('/user/user_display');
});

//Link to individual posts
Route::get('/post', function () {
    return view('post');
});


Route::get('/post/{id}','PostController@show');
