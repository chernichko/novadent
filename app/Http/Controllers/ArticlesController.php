<?php

namespace App\Http\Controllers;

use App\Article;
use App\Prices;
use App\ServiceGroups;
use App\SiteInfo;
use App\TextPages;
use App\News;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::where(['active' => 1])->get();
        return view('articles.index',['list'=>$data]);
    }

    public function element($code)
    {
        $data = Article::where(['code'=>$code])->first();
 //       $prev = News::where(['id ', '>' , $data->id])->get();
//        $next = News::where(['code'=>$code])->first();
//
 //       dd($prev);

        return view('articles.element',['news'=>$data]);
    }
}
