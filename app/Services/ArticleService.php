<?php

namespace App\Services;

use App\Article;
use Illuminate\Http\Request;

class ArticleService
{

    protected $imgPath = 'public/files/article';
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
            $article = Article::findOrFail($data['id']);
        } else {
            $article = new Article();
        }

        if ($request->hasFile('preview')) {
            $file = $this->imageService->saveImage($this->imgPath, $request);

            if (!empty($file['path'])) {
                $article->image = $file['filename'];
            }
        }

        if (isset($data['dltImg'])) {
            $article->image = '';
        }

        $article->name = $data['name'];
        $article->code = $data['code'];
        $article->description = htmlspecialchars($data['description']); //docum
        $article->short_description = htmlspecialchars($data['short_description']);
        $article->active = isset($data['active']) ? 1 : 0;

        $article->save();

        return $article;
    }

}
