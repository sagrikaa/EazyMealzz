<?php
use Illuminate\Support\Facades\Input;
use App\Recipe;
use App\User;
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


Route::get('/contact','ContactMessageController@create');

Route::post('/contact','ContactMessageController@store')->name('contact.store');
//User Home profile page
Route::get('/userhome', 'PostController@index');

//User Feed Page
Route::get('userfeed', 'PostController@userfeed');

Route::resource('recipes', 'RecipeController')->middleware('auth');

Route::get('/about', function () {
    return view('faq');
});


Route::get('/feed', function () {
    return view('/user/user_feed');
})->middleware('auth');

//User Profile Settings Route
Route::get('/profilesettings', function () {
    return view('/user/profile_settings_new');
})->middleware('auth');

Route::get('/profilesetting','UserController@user_settings')->middleware('auth');

Route::get('/updateUserProfile/{id}', 'UserController@update');

//Admin Home
Route::get('/admin', function () {
    return view('admin');
});

//Admin Home->User display

Route::get('useradmin', 'UserController@indexadmin')->name('userdisp');
Route::get('/useradmin/export', 'UserController@export')->name('user.export');
Route::get('/recipeadmin', 'RecipeController@indexadmin')->name('recipedisp');
Route::get('/recipeadmin/export', 'RecipeController@export')->name('recipe.export');
Route::get('/postadmin', 'PostController@indexadmin')->name('postdisp');
Route::get('/postadmin/export', 'PostController@export')->name('post.export');
Route::post('/postadmin/{id}','PostController@destroy')->name('destroypost');

Route::get('/userd', function () {
    return view('/user/user_display');
});

//Link to individual posts
Route::get('/post', function () {
    return view('post');
});


Route::get('/post/{id}','PostController@show');

Route::get('/storeComment','CommentController@store');
Route::get('/logout', 'Auth\LoginController@logout');



Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
});
Route::post('/user/{id}','UserController@deactivate')->name('deact');
Route::post('/users/{id}','UserController@activate')->name('act');
Route::post('/recipe/{id}','RecipeController@reject')->name('deactrecipe');
Route::post('/recipes/{id}','RecipeController@approve')->name('actrecipe');

Route::any ( '/search', function () {
	$q = Input::get ( 'q' );
	if($q != ""){
	$user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
	$pagination = $user->appends ( array (
				'q' => Input::get ( 'q' )
		) );
	if (count ( $user ) > 0)
		return view ( 'admin_dashboard' )->withDetails ( $user )->withQuery ( $q );
	}
		return view ( 'admin_dashboard' )->withMessage ( 'No Results found. Try to search again !' );
} );
