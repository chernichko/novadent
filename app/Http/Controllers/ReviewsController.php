<?php

namespace App\Http\Controllers;

use App\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Reviews::where('agreed', 1)->get();

        return view('reviews', ['reviews' => $reviews]);
    }

    public function add(Request $request)
    {
        $data = $request->all();
        $result = Reviews::saveReviewe($data);

        print $result;
    }
}
