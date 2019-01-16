<?php

namespace App\Http\Controllers;

use App\Prices;
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
        $data = News::where(['active' => 1])->get()->all();
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
        return view('services.index',['services' => $data]);
    }

    public function servicesElement($code)
    {
        $data = ServiceGroups::where(["code" => $code])->first();
        $services_list = ServiceGroups::where(["active" => 1])->get();
        $prices_list = Prices::where(['service_group_id' => $data['id']])->get();

        $price_left = [];
        $price_right = [];

        foreach ($prices_list as $key => $price){
            if($key%2 == 0)
                $price_left[] = $price;
            else
                $price_right[] = $price;
        }

        $price = [
            'left' => $price_left,
            'right' => $price_right
        ];

        return view('services.element',[
            'service' => $data,
            'services_list' => $services_list,
            'price' => $price
        ]);
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
