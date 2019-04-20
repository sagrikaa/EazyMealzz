<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD
=======
use App\Article;

>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        return view('index');
=======
        return view('index', ['articles' => Article::paginate(3)]);
    }

    public function singleArticle($id)
    {
        return view('single', ['article' => Article::find($id)]);
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
    }
}
