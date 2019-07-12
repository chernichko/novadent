<?php

namespace App\Http\Controllers;

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

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices_list = Prices::get();
        $services_list = ServiceGroups::where(["active" => 1])->get();

        return view('prices',[
            'prices' => $prices_list,
            'services' => $services_list
        ]);

    }
}
