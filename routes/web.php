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

Route::resource('recipes', 'RecipeController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('faq');
});



Route::get('/contact','ContactMessageController@create');

Route::post('/contact','ContactMessageController@store')->name('contact.store');

Route::get('user_feed', 'PostController@index');

Route::get('/feed', function () {
    return view('/user/user_feed');
});

Route::get('/profilesetting', function () {
    return view('/user/profileSettingsnew');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('user', 'UserController@index')->name('userdisp');
Route::get('/userd', function () {
    return view('/user/user_display');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/post/{id}','PostController@show');

//************Ruchi Singh*************************************************************


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
