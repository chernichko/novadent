<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SiteInfo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function info(Request $request)
    {
        if ($request->isMethod('post')) {
            SiteInfo::saveInfo($request->all());
        }

        $info = SiteInfo::getSiteInfo();

        return view('admin.info', ['data' => $info]);
    }

    public function feedback()
    {
        return view('admin.feedback');
    }

}
