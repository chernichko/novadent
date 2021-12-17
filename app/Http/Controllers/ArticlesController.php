<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $data = Article::where(['active' => 1])->get();
        return view('articles.index',['list'=>$data]);
    }

    public function element($code)
    {
        $data = Article::where(['code'=>$code])->first();

        return view('articles.element',['news'=>$data]);
    }
}
