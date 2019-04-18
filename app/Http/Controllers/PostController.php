<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        
        $user = Auth::user();
        
        $title = "Profile"; 
       // $posts= Post::all();
       //$posts=Post::where('title','Post Two')->get()
       //$posts=Post::orderby('created_at','desc')->paginate(2);
        
       $user_id= $user->id;
        
        $posts=Post::orderby('created_at','desc')->where('user_id',$user_id)->paginate(2);
        return view('user.userprofile')->with('title',$title)->with('posts',$posts)->with('currentuser',$user);
    }

    public function userfeed(){
        $title = "Feed"; 
        $posts=Post::orderby('created_at','desc')->paginate(2);
        return view('user.user_feed')->with('title',$title)->with('posts',$posts);

    }
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
       $post= Post::find($id);

       //grabbing username from the post 
       $username= USER::find($post->user_id)->name;
       //$comments = CommentController.showPostComments($post->id);
       return view('post')->with('post',$post)->with('user',$username);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
