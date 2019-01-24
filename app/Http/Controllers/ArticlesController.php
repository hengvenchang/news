<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use Carbon\Carbon;
use View;
use Redirect;
class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }
    public function create()
    {
        // return template for create
        return View::make('article.create');
    }
    public function store(Request $request)
    {    
        //save to database
        $article = new Article;
        $article->tittle = request('tittle');
        $article->categories_id = request('category');
        $article->content = request('content');
        $article->published_at = Carbon::now();
        $article->save();
        return redirect('/');
    }
    public function show($id)
    {
        // get the aritcle
        $article = Article::find($id);

        // show the view and pass the article to it
        return View::make('article.show')->with('article', $article);
    }
    public function edit($id)
    {
        // get the article
        $article = Article::find($id);

        // show the edit form and pass the article
        return View::make('article.edit')
            ->with('article', $article);
    }
    public function update($id, Request $request)
    {
        $article =  Article::find($id);
        $article->tittle = request('tittle');
        $article->categories_id = request('category');
        $article->content = request('content');
        $article->save();
        // redirect
        return Redirect::to('/');
    }
    public function destroy($id)
    {
        // find article and delect
        $article = Article::find($id);
        $article->delete();

        // redirect
        return Redirect::to('/');
    }


}
