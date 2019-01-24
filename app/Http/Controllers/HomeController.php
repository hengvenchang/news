<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
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

    public function index()
    {
        $articles = DB::table('articles')
        ->orderBy('created_at','desc')
        ->get();

        return view('home')->with('articles', $articles);
    }  
    public function show($id)
    {
        $articles = Article::where('categories_id', $id)->get();

        return view('home')->with('articles', $articles);
    }   
}
