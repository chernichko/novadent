<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reviews;
use Illuminate\Http\Request;


class ReviewsController extends Controller
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
        $reviews = Reviews::all();
        return view('admin.reviews', ['reviews'=>$reviews]);
    }

    public function update(Request $request){

        $data = $request->all();

        $review = Reviews::find($data["id"]);
        $review->agreed = $data["status"];
        $review->save();

    }



}
