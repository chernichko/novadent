<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reviews = Reviews::all();
        return view('admin.reviews', ['reviews' => $reviews]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $review = Reviews::find($data["id"]);
        $review->agreed = $data["status"];
        $review->save();
    }
}
