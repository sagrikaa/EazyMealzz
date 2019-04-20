<?php
use Illuminate\Support\Facades\Input;
use App\Recipe;
use App\User;
<<<<<<< HEAD
=======
use App\Article;
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
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

<<<<<<< HEAD

Route::get('/', function () {
    return view('index');
});

=======
Route::get('/', [
    'uses' => 'ArticleController@index',
    'as' => 'index'
]);

Route::get('/article/{id}', [
    'uses' => 'ArticleController@singleArticle',
    'as' => 'article.single'
]);
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
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

<<<<<<< HEAD
Route::resource('recipes', 'RecipeController')->middleware('auth');
=======
Route::resource('recipes', 'RecipeController');
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556

Route::get('/about', function () {
    return view('faq');
});


Route::get('/feed', function () {
    return view('/user/user_feed');
<<<<<<< HEAD
})->middleware('auth');

//User Profile Settings Route
Route::get('/profilesettings', function () {
    return view('/user/profile_settings_new');
})->middleware('auth');

Route::get('/profilesetting','UserController@user_settings')->middleware('auth');

Route::get('/updateUserProfile/{id}', 'UserController@update');
=======
});

//User Profile Settings Route
Route::get('/profilesetting', function () {
    return view('/user/profile_settings_new');
});
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556

//Admin Home
Route::get('/admin', function () {
    return view('admin');
});

//Admin Home->User display

<<<<<<< HEAD
Route::get('useradmin', 'UserController@indexadmin')->name('userdisp');
Route::get('/useradmin/export', 'UserController@export')->name('user.export');
Route::get('/recipeadmin', 'RecipeController@indexadmin')->name('recipedisp');
Route::get('/recipeadmin/export', 'RecipeController@export')->name('recipe.export');
Route::get('/postadmin', 'PostController@indexadmin')->name('postdisp');
Route::get('/postadmin/export', 'PostController@export')->name('post.export');
Route::post('/postadmin/{id}','PostController@destroy')->name('destroypost');

=======
Route::get('user', 'UserController@index')->name('userdisp');
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
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
<<<<<<< HEAD
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
=======


Route::any('/search', function(){
  $keyword = Input::get('keyword');
  $scope = Input::get('scope');
  if($scope == "recipes"){


          if($keyword != ''){
            $data= Recipe::where('recipe_name', 'LIKE', '%'.$keyword.'%')
                             ->orWhere('recipe_description', 'LIKE', '%'.$keyword.'%')
                             ->paginate(5)
                             ->setPath('');
                $data->appends(array(
                  'keyword' => Input::get('keyword'),
                ));
                if(count($data) > 0){
                  return view('admin_dashboard')->withData($data);
                }
                return view('admin_dashboard')->withMessage("No Results Found");
          }
          else{
            $data=Recipe::paginate(5);
            return view('admin_dashboard')->withData($data);
          }

        }
    elseif($scope == "users"){

      if($keyword != ''){
        $data= User::where('name', 'LIKE', '%'.$keyword.'%')
                         ->orWhere('email', 'LIKE', '%'.$keyword.'%')
                         ->paginate(5)
                         ->setPath('');
            $data->appends(array(
              'keyword' => Input::get('keyword'),
            ));
            if(count($data) > 0){
              return view('admin_dashboard')->withData($data);
            }
            return view('admin_dashboard')->withMessage("No Results Found");
      }
      else{
        $data=User::paginate(5);
        return view('admin_dashboard')->withData($data);
      }

    }
else{
  return view('admin_dashboard')->withMessage("No Scope Selected");
}


});
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
