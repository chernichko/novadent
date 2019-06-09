<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Reviews;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
        $gallery = Gallery::all();

        return view('gallery',['gallery' => $gallery]);

    }
}
