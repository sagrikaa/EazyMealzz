<?php
/**
 * Created by IntelliJ IDEA.
 * User: bedi
 * Date: 2019-04-17
 * Time: 18:00
 */

namespace App\Http\Controllers;


use App\Article;

class ArticleController extends Controller
{

    public function index()
    {
        return view('index', ['articles' => Article::paginate(3)]);
    }

    public function singleArticle($id)
    {
        return view('single', ['article' => Article::find($id)]);
    }


}
