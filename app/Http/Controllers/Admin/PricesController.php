<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Prices;
use App\Reviews;
use App\ServiceGroups;
use Illuminate\Http\Request;


class PricesController extends Controller
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
        $list_service = ServiceGroups::all();

        $prices = [];

        foreach ($list_service as $group){

            $prices_tmp = Prices::where(['service_group_id' => $group['id']])->get();
            $prices[$group['id']] = $prices_tmp;
        }

        return view('admin.prices',['services'=>$list_service, 'price'=>$prices]);
    }

    public function save(Request $request)
    {

        if($request->isMethod('post')) {

            $post = $request->all();

            $pod_services = \GuzzleHttp\json_decode($post['data']);

            foreach ($pod_services as $item){
                if(!empty($item->name) && !empty($item->price))
                    Prices::savePrice($item,$post['service']);
                else
                    Prices::deletePrice($item->id);
            }
        }

//        $list_service = ServiceGroups::all();
//
//        $prices = [];
//
//        foreach ($list_service as $group){
//
//            $prices_tmp = Prices::where(['service_group_id' => $group['id']])->get();
//            $prices[$group['id']] = $prices_tmp;
//        }
//
//        return view('admin.prices',['services'=>$list_service, 'price'=>$prices]);
    }

}
