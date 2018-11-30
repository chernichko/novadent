<?php

namespace App\Http\Controllers;

use App\SiteInfo;
use App\TextPages;
use Illuminate\Http\Request;

class MainController extends Controller
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
//        $data = SiteInfo::get();
//
//        $info = [];
//
//        foreach ($data->toArray() as $item){
//            $info[$item['code']] = $item['value'];
//        }

        return view('index');
    }

    public function about()
    {
        $data = TextPages::where(['code'=>'about-us'])->first();
        return view('about',['data'=>$data]);
    }

    public function news()
    {
        return view('news');
    }

    public function services()
    {
       return view('services');
    }

    public function contacts()
    {
        $data = SiteInfo::get();

        $info = [];

        foreach ($data->toArray() as $item){
            $info[$item['code']] = $item['value'];
        }

        return view('contacts',['info'=>$info]);
    }
}
