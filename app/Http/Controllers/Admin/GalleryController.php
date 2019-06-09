<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery');
    }

    public function save(Request $request)
    {
        if ($request->hasFile('file')) {

            Gallery::saveGallery($request);

        }

        return view('admin.gallery');
    }

}
