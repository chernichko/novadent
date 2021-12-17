<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ServiceGroups;
use App\SiteInfo;
use App\TextPages;
use App\Article;
use App\Prices;
use App\Doctors;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $list_news = Article::all();
        return view('admin.article.index', ['listnews' => $list_news]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {

            Article::saveArticle($request);

            return redirect()->route('admin.article');
        }

        return view('admin.article.create');
    }

    public function delete($id)
    {
        $article = Article::find($id);

        $article->delete();

        return redirect()->route('admin.article');
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {

            Article::saveArticle($request);
        }

        $article = Article::where(['id' => $id])->first();

        return view('admin.article.edit', ['new' => $article]);
    }
}
