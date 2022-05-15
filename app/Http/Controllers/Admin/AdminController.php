<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ServiceGroups;
use App\Services\NewsService;
use App\SiteInfo;
use App\TextPages;
use App\News;
use App\Doctors;
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

    //то что ниже расположить в свои файлы

    public function services()
    {
        $list_service = ServiceGroups::all();
        return view('admin.services.index', ['listService' => $list_service]);
    }

    public function serviceCreate(Request $request)
    {
        if ($request->isMethod('post')) {
            ServiceGroups::saveGroup($request->all());
            return redirect()->route('admin.services');
        }

        return view('admin.services.create');
    }

    public function serviceEdit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            ServiceGroups::saveGroup($request->all());
        }

        $service = ServiceGroups::where(['id' => $id])->first();

        return view('admin.services.edit', ['service' => $service]);
    }

    public function serviceDelete($id)
    {
        $service = ServiceGroups::find($id);

        $service->delete();

        return redirect()->route('admin.services');
    }



    public function pages()
    {
        $list_pages = TextPages::all();
        return view('admin.pages.index', ['listPages' => $list_pages]);
    }

    public function pageCreate(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->except('_method', '_token');

            TextPages::savePage($input);

            return redirect()->route('admin.pages');
        }

        return view('admin.pages.create');
    }

    public function pageEdit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $input = $request->except('_method', '_token');

            TextPages::savePage($input);
        }

        $page = TextPages::where(['id' => $id])->first();

        return view('admin.pages.edit', ['page' => $page]);
    }

    public function pageDelete($id)
    {
        $page = TextPages::find($id);

        $page->delete();

        return redirect()->route('admin.pages');
    }

    public function doctors()
    {
        $list_doctors = Doctors::all();
        return view('admin.doctors.index', ['listDoctors' => $list_doctors]);
    }

    public function doctorCreate(Request $request)
    {
        if ($request->isMethod('post')) {
            Doctors::saveDoctor($request);
            return redirect()->route('admin.doctors');
        }

        return view('admin.doctors.create');
    }

    public function doctorEdit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            Doctors::saveDoctor($request);
        }

        $doctor = Doctors::where(['id' => $id])->first();

        return view('admin.doctors.edit', ['doctor' => $doctor]);
    }

    public function feedback()
    {
        return view('admin.feedback');
    }

}
