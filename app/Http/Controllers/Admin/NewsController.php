<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $list_news = News::all();
        return view('admin.news.index', ['listnews' => $list_news]);
    }

    public function newsCreate(Request $request, NewsService $newsService)
    {
        if ($request->isMethod('post')) {
            $newsService->save($request);
            return redirect()->route('admin.news');
        }

        return view('admin.news.create');
    }

    public function newsDelete($id)
    {
        $news = News::find($id);

        $news->delete();

        return redirect()->route('admin.news');
    }

    public function newsEdit(Request $request, NewsService $newsService, $id)
    {
        if ($request->isMethod('post')) {
            $news = $newsService->save($request);
        }else{
            $news = News::find($id);
        }

        return view('admin.news.edit', ['new' => $news]);
    }
}
