<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ServiceGroups;
use App\SiteInfo;
use App\TextPages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
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
        return view('admin.index');
    }

    public function info(Request $request)
    {
        if($request->isMethod('post')){

            $file = $request->file('logotip');
            $upload_folder = 'public/files';
            $filename = $file->getClientOriginalName(); // image.jpg

            Storage::putFileAs($upload_folder, $file, $filename);

//            $path = $request->file('logotip')->storeAs('files', 'logotip');

//            dd($path);

//            SiteInfo::saveInfo($request->all());

//            foreach ($request->files as $file) {
//                $filename = $photo->store('photos');
//                ProductsPhoto::create([
//                    'product_id' => $product->id,
//                    'filename' => $filename
//                ]);

//                if(move_uploaded_file())

//                dd($file);

//            }

        }

        $data = SiteInfo::all();

        $info = [];
        foreach ($data as $row){
            $info[$row->code] = $row->value;
        }

        return view('admin.info',['data' => $info]);
    }
    public function news()
    {
        return view('admin.news');
    }
    public function services()
    {
        $list_service = ServiceGroups::all();
        return view('admin.services.index',['listService'=>$list_service]);
    }

    public function serviceCreate(Request $request)
    {
        if($request->isMethod('post')) {

            ServiceGroups::saveGroup($request->all());

            return redirect()->route('admin.services');
        }

        return view('admin.services.create');
    }

    public function serviceEdit(Request $request,$id)
    {
        if($request->isMethod('post')) {

            ServiceGroups::saveGroup($request->all());

        }

        $service = ServiceGroups::where(['id'=>$id])->first();

        return view('admin.services.edit',['service'=>$service]);
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
        return view('admin.pages.index',['listPages'=>$list_pages]);
    }

    public function pageCreate(Request $request)
    {
        if($request->isMethod('post')) {

            $input = $request->except('_method', '_token');

            TextPages::savePage($input);

            return redirect()->route('admin.pages');
        }

        return view('admin.pages.create');
    }

    public function pageEdit(Request $request,$id)
    {
        if($request->isMethod('post')) {

            $input = $request->except('_method', '_token');

            TextPages::savePage($input);
        }

        $page = TextPages::where(['id'=>$id])->first();

        return view('admin.pages.edit',['page'=>$page]);
    }

    public function pageDelete($id)
    {
        $page = TextPages::find($id);

        $page->delete();

        return redirect()->route('admin.pages');
    }
}
