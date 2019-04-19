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
Route::get('/profilesetting', function () {
    return view('/user/profile_settings_new');
});

//Admin Home
Route::get('/admin', function () {
    return view('admin');
});

//Admin Home->User display

Route::get('user', 'UserController@index')->name('userdisp');
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
