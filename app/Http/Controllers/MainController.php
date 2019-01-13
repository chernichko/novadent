<?php

namespace App\Http\Controllers;

use App\ServiceGroups;
use App\SiteInfo;
use App\TextPages;
use App\News;
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
        $data = ServiceGroups::where(["active" => 1])->get();

        return view('index',['services' => $data]);
    }

    public function about()
    {
        $data = TextPages::where(['code'=>'about-us'])->first();
        return view('about',['data'=>$data]);
    }

    public function news()
    {
        $data = News::get()->all();
        return view('news.index',['list'=>$data]);
    }

    public function newsElement($code)
    {
        $data = News::where(['code'=>$code])->first();

//        dd($data);

        return view('news.element',['news'=>$data]);
    }

    public function services()
    {
        $data = ServiceGroups::where(["active" => 1])->get();
        return view('services',['services' => $data]);
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
