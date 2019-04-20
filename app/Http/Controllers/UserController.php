<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Excel;
use App\Exports\UsersExport;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function index()
  {
      
  }
=======

class UserController extends Controller
{
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD

    public function indexadmin()
    {
        $title = "USERS";
        $users= User::orderby('id','asc')->paginate(8);
        return view('user.user_display')->with('title',$title)->with('users',$users);
    }

     /**
      * Display a listing of the resource.
      *
      * Export to Excel Link
      */

     public function export()
     {
         return Excel::download(new UsersExport, 'users.xlsx');
     }



    public function user_settings()
    {

        if(Auth::check()){
            $user=Auth::user();
            return view('user.profile_settings_new')->with('user',$user);
        }
        else
        {
            return view('auth.login');
        }
    }


=======
    public function index()
    {
        $title = "USERS";
        $users= User::all();
        return view('user.user_display')->with('title',$title)->with('users',$users);
    }

>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD


        $request->validate([

            'user_avatar'=>'image|nullable|max:1999',
            'user_name'=>'required'

        ]);
        return $request;
        //Image File Handing
        if($request->hasFile('user_avatar')){
            return "success";
            //getting filename with extension
            $fileWithExt = $request->file('user_avatar')->getClientOriginalName();

            //getting just the file name without ext

            $filenameWithoutExt = pathinfo($fileWithExt,PATHINFO_FILENAME);

            //getting just the extension

            $Ext = $request->file('user_avatar')->getClientOriginalExtension();

            //file name to store

            $filenameToStore = $fileWithExt._.time().".".$Ext;

            //path
            $path = $request->file('user_avatar')->storeAs('public/user_avatar',$filenameToStore);
        }
        else{
            $filenameToStore = "defaultavatar.jpg";
        }



        $user = User::find($id);
        $user->name = $request->input('user_name');
        $user->email = $request->input('user_email');
        $user->user_title = $request->input('user_title');
        $user->user_description  =$request->input('user_description');
        $user->avatar=$request->input('user_avatar');
        // $post_id=$request->input('post_id');
        // $post_link='/post/{{post_id}}';
        $user->save();

        return "success";
=======
        //
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivate($id)
    {
      $user = User::find($id);
      $user->user_status="Inactive";
      $user->save();
      return redirect()->route('userdisp');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activate($id)
    {
      $user = User::find($id);
      $user->user_status="Active";
      $user->save();
      return redirect()->route('userdisp');
    }




}
