<?php

namespace App\Services;

use App\News;
use Illuminate\Http\Request;

class NewsService
{
    protected $imgPath = 'public/files/news';
    /**
     * @var ImageService
     */
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function save(Request $request)
    {
        $data = $request->all();

        if (isset($data['id'])) {
            $news = News::findOrFail($data['id']);
        } else {
            $news = new News();
        }

        if ($request->hasFile('preview')) {
            $file = $this->imageService->saveImage($this->imgPath, $request);

            if (!empty($file['path'])) {
                $news->image = $file['filename'];
            }
        }

        if (isset($data['dltImg'])) {
            $news->image = '';
        }
        $news->name = $data['name'];
        $news->code = $data['code'];
        $news->description = htmlspecialchars($data['description']);
        $news->short_description = htmlspecialchars($data['short_description']);
        $news->active = isset($data['active']) ? 1 : 0;

        $news->save();
        return $news;
    }
}
