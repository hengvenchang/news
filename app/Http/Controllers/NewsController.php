<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use Carbon\Carbon;
class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show']);
    }
    public function index()
    {
        $articles = DB::table('articles')
        ->orderBy('created_at','desc')
        ->get();
        return response()->json($articles,200);
    }
    public function show($id)
    {
        $article = Article::find($id);

        // show the view and pass the article to it
        return response()->json($article,200);
    }

       
}
