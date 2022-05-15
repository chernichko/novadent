<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(ArticleService $articleService)
    {
        $list_news = Article::all();
        return view('admin.article.index', ['listnews' => $list_news]);
    }

    public function create(Request $request, ArticleService $articleService)
    {
        if ($request->isMethod('post')) {
            $articleService->save($request);
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

    public function edit(Request $request,ArticleService $articleService, $id)
    {
        if ($request->isMethod('post')) {
            $article = $articleService->save($request);
        }else{
            $article = Article::find($id);
        }

        return view('admin.article.edit', ['new' => $article]);
    }
}
