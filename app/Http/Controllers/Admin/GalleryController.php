<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Reviews;
use Illuminate\Http\Request;


class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gallery = Gallery::all();
        return view('admin.gallery', ['gallery' => $gallery]);
    }

    public function save(Request $request)
    {
        if ($request->hasFile('file')) {
            Gallery::saveGallery($request);
        }
        return redirect()->route('admin.gallery');
    }


    public function delete(Request $request)
    {
        if ($data = $request->all()) {
            Gallery::delGallery($data);
        }
        return redirect()->route('admin.gallery');
    }
}
