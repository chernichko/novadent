<?php

namespace App\Http\Controllers;

use App\Doctors;
use App\Liscence;
use App\Prices;
use App\ServiceGroups;
use App\SiteInfo;
use App\TextPages;
use App\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = ServiceGroups::where(["active" => 1])->get();
        //$about = TextPages::find(1)->where(['code'=>'about-us'])->get();
        $about = '';
        //$text = explode('</p>',$about[0]->description); // This is
        //$tmp = [$text[0],$text[1],$text[2]];
        //$about_text = implode('</p>',$tmp);

        return view('index', ['services' => $data, 'about' => '']);
    }

    public function about()
    {
        $data = TextPages::where(['code' => 'about-us'])->first();
        $doctors = Doctors::get();
        $liscences = Liscence::get();

        return view('about', ['data' => $data, 'doctors' => $doctors, 'liscences' => $liscences]);
    }

    public function news()
    {
        $data = News::where(['active' => 1])->get();
        return view('news.index', ['list' => $data]);
    }

    public function newsElement($code)
    {
        $data = News::where(['code' => $code])->first();

        return view('news.element', ['news' => $data]);
    }

    public function services()
    {
        $data = ServiceGroups::where(["active" => 1])->get();
        return view('services.index', ['services' => $data]);
    }

    public function servicesElement($code)
    {
        $data = ServiceGroups::where(["code" => $code])->first();
        $services_list = ServiceGroups::where(["active" => 1])->get();

        return view('services.element', [
            'service' => $data,
            'services_list' => $services_list
        ]);
    }

    public function contacts()
    {
        $data = SiteInfo::get();

        $info = [];

        foreach ($data->toArray() as $item) {
            $info[$item['code']] = $item['value'];
        }

        return view('contacts', ['info' => $info]);
    }
}
