<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Reviews;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();

        return view('gallery',['gallery' => $gallery]);
    }
}
