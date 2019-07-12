<?php

namespace App\Http\Controllers\Admin;

use App\Liscence;
use App\Http\Controllers\Controller;
use App\Reviews;
use Illuminate\Http\Request;


class LiscenceController extends Controller
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
        $liscences = Liscence::all();

        return view('admin.liscence', ['liscence' => $liscences]);
    }

    public function save(Request $request)
    {

        if ($request->hasFile('file')) {

            Liscence::saveLiscence($request);

        }

        return redirect()->route('admin.liscence');
    }



    public function delete(Request $request)
    {
        if ($data = $request->all()) {

            Liscence::delLiscence($data);

        }

        return redirect()->route('admin.liscence');
    }

}
